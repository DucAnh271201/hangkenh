<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return Post::class;
    }

    public function find($id)
    {
        return $this->model::query()->with(['postMeta','categories', 'tags'])->find($id);
    }
    public function getDataPaginate($type, $search, $perPage = 10, $extraData = [])
    {
        $posts = $this->model::query()
            ->with(['author', 'categories', 'tags'])
            ->where('type', $type);

        if (!empty($search)){
            $posts->where('slug', 'LIKE', "%$search%");
        }
        if (!empty($extraData)){
            foreach ($extraData as $key => $condition){
                $posts->where($key, $condition);
            }
        }

        $posts = $posts->orderBy('id', 'DESC');

        return $posts->paginate($perPage);
    }

}
