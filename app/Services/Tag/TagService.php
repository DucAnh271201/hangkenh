<?php

namespace App\Services\Tag;

use App\Repositories\Tag\TagRepositoryInterface;

class TagService
{

    public function __construct(
        private readonly TagRepositoryInterface $repository
    )
    {
    }

    public function syncGetIds(array $tags,string $type)
    {
        $tagSave = [];
        foreach ($tags as $tag){
            $slug = \Str::slug($tag);
            $tagFind = $this->repository->findBySlug($slug);
            if ($tagFind){
                $tagSave[] = $tagFind->id;
                continue;
            }
            $data = [
                'title' => $tag,
                'slug' => \Str::slug($tag),
                'type' => $type,
            ];
            $created = $this->repository->create($data);
            $tagSave[] = $created->id;
        }


        return $tagSave;
    }

}
