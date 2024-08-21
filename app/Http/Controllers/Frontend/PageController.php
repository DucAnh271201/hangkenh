<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Post;
use App\Services\Category\CategoryService;
use App\Services\Post\PostService;
use App\Utils\Util;
use Illuminate\Http\Request;
use Spatie\SchemaOrg\Schema;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageController extends Controller
{
    public function home()
    {
        try {

            $pageId = get_option('page_on_front');
            $page = get_page_id($pageId);
            if (!$page){
                abort(404);
            }
            return view('frontend.templates.page', [
                'page' => $page,
            ])->withShortcodes();
        } catch (\Exception $exception) {
            if ($exception instanceof NotFoundHttpException){
                abort(404);
            }
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        abort(500);
    }

    public function page($slug, Request $request)
    {
        try {
            $postService = app(PostService::class);
            $post = $postService->findBySlug($slug);
            if (!$post) {
                abort(404);
            }
            $type = $post->type;
            $shared = [
                "$type" => $post
            ];
            if ($type == Post::TYPE_PRODUCT) {
                $mainCategory = get_main_category($post->categories);
                $shared['categoryMain'] = $mainCategory;
                $shared['breadcrumbs'] = $mainCategory?->getBreadcrumbs(true);

                $categoryNameList = [];
                foreach ($post->categories as $cat) {
                    $categoryNameList[] = $cat->title;
                }

                $shared['categoryNameList'] = implode(',', $categoryNameList);
                $shared['productRelated'] = $postService->getRelated($post);

                $productSchema = Schema::product()
                    ->name($post->title)
                    ->image($post->feature_image_link)
                    ->description($post->short_description)
                    ->sku($post->sku)
                    ->offers(Schema::offer()
                        ->priceCurrency('USD')
                        ->price($post->regular_price)
                        ->availability(Schema::itemAvailability()->identifier('http://schema.org/InStock'))
                        ->url(url()->current())
                    );
                $shared['jsonLdScript'] = $productSchema->toScript();


                $attributes = $post->product->attribute;
                $attributeGroup = [];
                foreach ($attributes as $attr){
                    $attributeGroup[$attr->parent_id][] = $attr;
                }
                $attributeParentData = Attribute::query()->whereIn('id', array_keys($attributeGroup))->orderBy('in_order')->get();
                $shared['attributeParentData'] = $attributeParentData;
                $shared['attributeGroup'] = $attributeGroup;
            }else{
                $shared['content'] = $post->description;
            }
            return view("frontend.templates.$type", $shared);

        } catch (\Exception $exception) {
            if ($exception instanceof NotFoundHttpException){
                abort(404);
            }
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        abort(500);
    }

    public function productCategory($slug)
    {
        try {
            $categoryService = app(CategoryService::class);
            $category = $categoryService->findBySlug($slug);
            if (!$category) {
                abort(404);
            }
            $category->load('children');
            $childs = Util::getAllChildren($category);
            $catIds = [];
            $catIds[] = $category->id;
            foreach ($childs as $cat) {
                $catIds[] = $cat->id;
            }
            $postService = app(PostService::class);

            $products = $postService->getPostByCategory(catIds: $catIds, paginate: true);

            $breadcrumbs = $category->getBreadcrumbs();
            return view('frontend.templates.category', [
                'category' => $category,
                'products' => $products,
                'breadcrumbs' => $breadcrumbs,
            ]);
        } catch (\Exception $exception) {
            if ($exception instanceof NotFoundHttpException){
                abort(404);
            }
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        abort(500);

    }
}
