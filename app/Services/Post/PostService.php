<?php

namespace App\Services\Post;

use App\Exceptions\ServiceException;
use App\Http\Requests\API\PostCreateRequest;
use App\Http\Requests\API\PostDatableRequest;
use App\Http\Requests\API\PostUpdateRequest;
use App\Models\Post;
use App\Models\ProductVariant;
use App\Repositories\Post\PostRepositoryInterface;
use App\Services\Tag\TagService;
use App\Utils\HttpResponseErrorCode;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostService
{

    public function __construct(
        private readonly TagService              $tagService,
        private readonly PostRepositoryInterface $postRepository
    )
    {
    }

    public function getPosts($ids = '', $catId = null, $sort = 'id', $sortDirection = 'DESC', $paginate = false, $perPage = 10, $type = 'post')
    {
        $query = $this->postRepository->query();
        if (empty($type)){
            $type = Post::TYPE_POST;
        }
        $query = $query->where('type', $type)->publish();
        if (!empty($ids)) {
            $query = $query->whereIn('id', explode(',', $ids));
        }

        if (strlen($catId) > 0) {
            $catId = explode(',', $catId);
            $query = $query->whereRelation('categories', function ($query) use ($catId){
                $query->whereIn('id', $catId);
            });
        }

        $query = $query->orderBy($sort, $sortDirection);

        if ($paginate) {
            return $query->paginate($perPage);
        }
        $query = $query->limit($perPage);
        return $query->get();
    }

    public function getProducts($ids = '', $catId = 0, $sort = 'id', $sortDirection = 'DESC', $paginate = false, $perPage = 10)
    {
        $query = $this->postRepository->query();
        $query = $query->where('type', Post::TYPE_PRODUCT)->publish();
        if (!empty($ids)) {
            $query = $query->whereIn('id', explode(',', $ids));
        }
        if ($catId > 0) {
            $query = $query->whereRelation('categories.id', $catId);
        }

        $query = $query->orderBy($sort, $sortDirection);

        if ($paginate) {
            return $query->paginate($perPage);
        }
        $query = $query->limit($perPage);
        return $query->get();
    }

    public function getPostHelper($type = 'post')
    {
        if (empty($type)){
            $type = Post::TYPE_POST;

        }
        $status = Post::STATUS_PUBLISH;
        $key = sprintf(Post::KEY_POST_CACHE, $type, $status);
        $dataCache = Cache::get($key);
        if ($dataCache) {
            return $dataCache;
        }

        $data = $this->postRepository->query()->where('type', $type)
            ->where('status', $status)->get();
        if ($data->count() > 0) {
            Cache::forever($key, $data);
        }
        return $data;
    }

    public function getPageSingle($pageName)
    {
        return $this->postRepository->query()->where('type', Post::TYPE_PAGE)
            ->publish()
            ->where('slug', Str::slug($pageName))
            ->first();
    }

    public function getPages()
    {
        $type = Post::TYPE_PAGE;
        $status = Post::STATUS_PUBLISH;
        $key = sprintf(Post::KEY_POST_CACHE, $type, $status);
        $dataCache = Cache::get($key);
        if ($dataCache) {
            return $dataCache;
        }

        $data = $this->postRepository->query()->where('type', $type)
            ->where('status', $status)->get();
        if ($data->count() > 0) {
            Cache::forever($key, $data);
        }
        return $data;
    }

    public function find($id)
    {
        return $this->postRepository
            ->query()
            ->with('postMeta')
            ->find($id);
    }


    public function findBySlug($slug)
    {
        return $this->postRepository->query()
            ->with('postMeta')
            ->where('slug', $slug)
            ->publish()
            ->first();
    }
    public function findBySlugAndType($slug, $type = 'post')
    {
        if (empty($type)){
            $type = Post::TYPE_POST;
        }
        return $this->postRepository->query()
            ->with('postMeta')
            ->where('slug', $slug)
            ->where('type', $type)
            ->publish()
            ->first();
    }

    public function getDatable(PostDatableRequest $request)
    {
        $type = $request->get('type');
        $search = $request->get('s');
        return $this->postRepository->getDataPaginate($type, $search);
    }
    public function getDesignDatable($designerId, PostDatableRequest $request)
    {
        $type = $request->get('type');
        $search = $request->get('s');
        $designers =  $this->postRepository->getDataPaginate($type, $search, 10 , [
            'author_id' => $designerId
        ]);
        $designers->load('designer');

        return $designers;
    }

    public function create(PostCreateRequest $request): bool
    {
        $admin = \Auth::guard('admin')->user();
        $adminId = $admin->id;
        $authorId = $request->input('author_id', $adminId);

        try {
            \DB::beginTransaction();
            $type = $request->input('type');
            $title = $request->input('title');
            $status = $request->input('status');
            $metaData = $request->input('meta_data');

            $slug = Str::slug($title);
            $data = [
                'title' => $title,
                'slug' => $slug,
                'type' => $type,
                'status' => $status,
                'author_id' => $authorId,
                'created_by' => $adminId,
                'updated_by' => $adminId
            ];
            if ($status == Post::STATUS_PUBLISH) {
                $data['post_date'] = Carbon::now();
            }

            /**
             * @var Post $post
             */
            $post = $this->postRepository->create($data);
            $post->seo()->create([
                'title' => $request->input('seo_title'),
                'description' => $request->input('seo_desc'),
                'keywords' => $request->input('keywords'),
            ]);
            $postMeta = [];
            foreach ($metaData as $key => $meta) {
                if (empty($meta)) {
                    continue;
                }
                $postMeta[] = [
                    'post_id' => $post->id,
                    'meta_key' => $key,
                    'meta_value' => is_array($meta) ? serialize($meta) : $meta,
                ];
            }

            if (!empty($postMeta)) {
                $post->postMeta()->insert($postMeta);
            }

            $categoryIds = $request->get('category_ids');

            if (is_array($categoryIds) && !empty(array_filter($categoryIds))) {
                $post->categories()->sync($categoryIds);
            }
            $tags = $request->get('tags');
            if (!empty($tags)) {
                $tagIds = $this->tagService->syncGetIds($tags, $type);
                $post->tags()->sync($tagIds);
            }

            if ($type == Post::TYPE_PRODUCT) {
                $productData = [
                    'post_id' => $post->id,
                    'sku' => $request->get('sku'),
                    'regular_price' => $request->get('regular_price') ?? 0,
                    'sale_price' => $request->get('sale_price') ?? 0,
                    'status' => $request->get('product_status'),
                    'stock_quantity' => $request->get('stock_quantity') ?? 0,
                ];

                $product = $post->product()->create($productData);

                $attributes = $request->get('attribute');

                if (!empty($attributes)) {
                    $product->attribute()->sync($attributes);
                }
            }

            \DB::commit();
            return true;
        } catch (\Exception $exception) {

            \DB::rollBack();
            \Log::error(__CLASS__ . '-' . __FUNCTION__ . ' Có lỗi xảy ra', [
                'trace' => $exception
            ]);
        }
        return false;
    }

    public function update(PostUpdateRequest $request): bool
    {
        $admin = \Auth::guard('admin')->user();
        $adminId = $admin->id;
        $authorId = $request->input('author_id', $adminId);

        try {
            \DB::beginTransaction();
            $id = $request->input('id');
            $type = $request->input('type');
            $title = $request->input('title');
            $status = $request->input('status');
            $metaData = $request->input('meta_data');

            $slug = Str::slug($title);
            $data = [
                'title' => $title,
                'slug' => $slug,
                'type' => $type,
                'status' => $status,
                'author_id' => $authorId,
                'created_by' => $adminId,
                'updated_by' => $adminId
            ];

            /**
             * @var Post $post
             */
            $post = $this->postRepository->update($id, $data);
            $post->seo()->update([
                'title' => $request->input('seo_title'),
                'description' => $request->input('seo_desc'),
                'keywords' => $request->input('keywords'),
            ]);

            foreach ($metaData as $key => $meta) {
                if (empty($meta)) {
                    continue;
                }
                $post->postMeta()->updateOrCreate([
                    'meta_key' => $key
                ], [
                    'meta_key' => $key,
                    'meta_value' => is_array($meta) ? serialize($meta) : $meta,
                ]);

            }

            $categoryIds = $request->get('category_ids');
            if (is_array($categoryIds) && !empty(array_filter($categoryIds))) {
                $post->categories()->sync($categoryIds);
            }
            $tags = $request->get('tags');
            if (!empty($tags)) {
                $tagIds = $this->tagService->syncGetIds($tags, $type);
                $post->tags()->sync($tagIds);
            }

            if ($type == Post::TYPE_PRODUCT) {
                $productData = [
                    'sku' => $request->input('sku'),
                    'regular_price' => $request->input('regular_price') ?? 0,
                    'sale_price' => $request->input('sale_price') ?? 0,
                    'status' => $request->input('product_status'),
                    'stock_quantity' => $request->input('stock_quantity') ?? 0,
                ];
                $product = $post->product;
                $post->product->update($productData);
                $attributes = $request->input('attribute');

                if (!empty($attributes)) {
                    $product->attribute()->sync($attributes);
                }

                $variants = $request->input('variant');

                if (!empty($variants)) {
                    foreach ($variants as $variant) {
                        $temp = [];
                        foreach ($variant as $key => $item) {
                            $temp[$key] = is_array($item) ? serialize($item) : $item;
                        }
                        $temp['product_id'] = $post->product->id;
                        ProductVariant::query()->updateOrCreate([
                            'product_id' => $post->product->id,
                            'attribute_id' => $variant['attribute_id']
                        ], $temp);
                    }
                }
            }

            \DB::commit();
            return true;
        } catch (\Exception $exception) {

            \DB::rollBack();
            \Log::error(__CLASS__ . '-' . __FUNCTION__ . ' Có lỗi xảy ra', [
                'trace' => $exception
            ]);
        }
        return false;
    }

    public function destroy($id)
    {
        $post = $this->postRepository->find($id);
        if (!$post) {
            throw new ServiceException(HttpResponseErrorCode::CODE_1010);
        }

        $post->delete();
        return true;
    }

    public function getPermalink(Post $post): string
    {
        return sprintf('/%s', $post->slug);
    }


    public function getRelated(Post $post, $order = 'id', $orderDirection = 'DESC', $limit = 4)
    {
        $cateIds = $post->categories->pluck('id');
        $query = $this->postRepository->query();

        $query = $query->whereHas('categories', function (Builder $q) use ($cateIds) {
            $q->whereIn('id', $cateIds);
        });

        $query = $query->whereNot('id', $post->id);
        $query = $query->limit($limit);
        $query = $query->orderBy($order, $orderDirection);

        return $query->get();
    }

    public function getPostByCategory($catIds = [], $order = 'id', $orderDirection = 'DESC', $paginate = false, $limit = 20)
    {
        $query = $this->postRepository->query();
        $query = $query->whereHas('categories', function (Builder $q) use ($catIds) {
            $q->whereIn('id', $catIds);
        });

        $query = $query->orderBy($order, $orderDirection);

        if ($paginate) {

            return $query->paginate($limit);
        }

        $query = $query->limit($limit);
        return $query->get();

    }
}
