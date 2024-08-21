<?php

namespace App\Services\Options;

use App\Models\Option;
use App\Repositories\Option\OptionRepositoryInterface;
use App\Services\File\FileService;
use App\Utils\Util;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;

class OptionService
{

    public function __construct(
        private readonly OptionRepositoryInterface $repository,
        private readonly FileService               $fileService
    )
    {
    }

    public function getAll(): mixed
    {
        $dataCache = Cache::get(Option::KEY_OPTION_CACHE);
        if ($dataCache) {
            return $dataCache;
        }
        $data = $this->repository->getAll();
        if ($data->count() > 0) {
            Cache::forever(Option::KEY_OPTION_CACHE, $data);
            return $data;
        }

        return collect();
    }

    public function findByOptionName($optionName)
    {
        $data = $this->getAll();
        $option = $data->where('option_name', $optionName)->first();
        if ($option) {
            return $option->option_value;
        }
        return '';
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (isset($data['action']) && $data['action'] == 'robot'){
            file_put_contents(public_path('robots.txt'), $data['content']);
            return true;
        }
        unset($data['_token']);
        foreach ($data as $key => $value) {
            $temp = [
                'option_name' => $key,
                'option_value' => $value
            ];
            if ($value instanceof UploadedFile) {
                $file = $this->fileService->upload($value);
                $temp['option_value'] = Util::getImageFullPath($file->path);
            }

            $this->repository->query()->updateOrCreate([
                'option_name' => $key
            ], $temp);
        }

        return true;
    }
}
