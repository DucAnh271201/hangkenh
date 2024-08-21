<?php

namespace App\Services\Option;

use App\Repositories\Option\OptionRepositoryInterface;
use App\Repositories\Post\PostRepository;
use App\Services\Post\PostService;

class OptionService
{

    public function __construct(
        private readonly OptionRepositoryInterface $repository,
        private readonly PostService $postService
    )
    {
    }

    public function getPageHome()
    {
        $optionName = 'page_on_front';
        $option = $this->repository->findOptionName($optionName);
        if ($option){
            $page = $this->postService->find($option->option_name);
            if ($page){
                return "";
            }
        }

        return "";
    }

}
