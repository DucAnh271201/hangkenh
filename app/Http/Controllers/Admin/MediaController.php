<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FileCreateRequest;
use App\Models\File;
use App\Services\File\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediaController extends Controller
{

    public function __construct(private readonly FileService $fileService)
    {
    }

    public function index(Request $request)
    {
        $search = $request->input('s');
        $files = File::query()->orderBy('id', 'DESC');
        if ($search){
            $files = $files->where('slug', 'like', "%". Str::slug($search) ."%");
        }
        $files = $files->paginate(48);
        return view('admin.pages.medias.index', [
            'files' => $files,
            'isInPage' => true
        ]);
    }

    public function getDatatable(Request $request)
    {
        $type = $request->get('type');
        $perPage = $type == 'in_page' ? 48 : 18;
        $files = File::query()->orderBy('id', 'DESC')->paginate($perPage);
        return view('admin.pages.medias.table', [
            'files' => $files,
            'isInPage' => $type == 'in_page'
        ]);
    }

    public function store(FileCreateRequest $request)
    {
        try {
            $file = $request->file('file');
            $file = $this->fileService->upload($file);

            return response_success();
        } catch (\Throwable $exception) {
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        return response_error();
    }

    public function delete($id)
    {
        try {
            $this->fileService->delete($id);
            return response_success();
        } catch (\Throwable $exception) {
            \Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        return response_error();

    }
}
