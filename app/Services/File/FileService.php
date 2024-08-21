<?php

namespace App\Services\File;

use App\DTOs\FileDto;
use App\Exceptions\ServiceException;
use App\Models\File;
use App\Repositories\File\FileRepositoryInterface;
use App\Utils\HttpResponseErrorCode;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class FileService
{

    public function __construct(
        private readonly FileRepositoryInterface $repository
    )
    {
    }

    public function upload(UploadedFile $file): File
    {
        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $slug = Str::slug($filename);
        $fileFind = $this->repository->findBySlug($slug);
        if ($fileFind) {
            return $fileFind;
        }
        $fileSize = $file->getSize();
        $fileMine = $file->getMimeType();
        $ext = $file->getClientOriginalExtension();
        $filename = Str::slug($filename);
        $fullFileName = "$filename.$ext";
        $path = $file->storeAs('files', $fullFileName, 'public');


        $fileDto = new FileDto(
            name: $filename,
            slug: $slug,
            mine: $fileMine,
            size: $fileSize,
            ext: $ext,
            path: $path
        );


        return $this->repository->create($fileDto->toArray());
    }

    public function delete($id): bool
    {
        $fileFind = $this->repository->find($id);
        if (!$fileFind){
            throw new ServiceException(HttpResponseErrorCode::CODE_1010);
        }
        \Storage::disk('public')->delete($fileFind->path);
        $fileFind->delete();
        return true;
    }
}
