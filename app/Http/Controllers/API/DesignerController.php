<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Designer\DesignCreateRequest;
use App\Http\Requests\API\Designer\DesignUpdateRequest;
use App\Http\Requests\API\PostCreateRequest;
use App\Http\Requests\API\PostDatableRequest;
use App\Http\Requests\API\PostUpdateRequest;
use App\Models\Designer;
use App\Models\Post;
use App\Services\Post\PostService;
use App\Utils\HttpResponseErrorCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DesignerController extends Controller
{
    public function __construct(
        private readonly PostService $postService
    )
    {
    }

    public function getDatable(Request $request)
    {
        $search = $request->input('s');
        $response = Designer::query();
        if (strlen($search) > 0){
            $response = $response->where('slug', 'like', "%$search%");
        }
        $response = $response->orderBy('id', 'DESC')->paginate(20);
        return view("admin.pages.designers.table", [
            'data' => $response
        ]);
    }

    public function getDesignDatable($designerId, PostDatableRequest $request)
    {
        $response = $this->postService->getDesignDatable($designerId, $request);
        return view("admin.pages.design_list.table", [
            'posts' => $response
        ]);
    }

    public function store(DesignCreateRequest $request)
    {
        try {
            \DB::beginTransaction();
            $created = Designer::query()->create([
                'name' => $request->input('name'),
                'short_name' => $request->input('short_name'),
                'slug' => $request->input('slug'),
                'short_description' => $request->input('short_description'),
                'description' => $request->input('description'),
                'image' => $request->input('image'),
                'image_library' => $request->input('image_library'),
                'status' => $request->input('status'),
                'meta_data' => $request->input('meta_data'),
            ]);

            $created->seo()->create([
                'title' => $request->input('seo_title'),
                'description' => $request->input('seo_desc'),
                'keywords' => $request->input('keywords'),
            ]);
            \DB::commit();
            return response_success([
                'redirect' => route('admin.manager-designer')
            ]);
        } catch (\Exception $exception) {
            Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        return response_error();
    }

    public function update(DesignUpdateRequest $request)
    {

        try {
            \DB::beginTransaction();
            $updated = Designer::query()->with('seo')->find( $request->input('id'));
            $updated->update([
                'name' => $request->input('name'),
                'short_name' => $request->input('short_name'),
                'slug' => $request->input('slug'),
                'short_description' => $request->input('short_description'),
                'description' => $request->input('description'),
                'image' => $request->input('image'),
                'image_library' => $request->input('image_library'),
                'status' => $request->input('status'),
                'meta_data' => $request->input('meta_data'),
            ]);

            $updated->seo->update([
                'title' => $request->input('seo_title'),
                'description' => $request->input('seo_desc'),
                'keywords' => $request->input('keywords'),
            ]);
            \DB::commit();
            return response_success([
                'redirect' => route('admin.manager-designer')
            ]);
        } catch (\Exception $exception) {
            Log::error(make_prefix_log_message(__CLASS__, __FUNCTION__, __LINE__, $exception->getMessage()));
        }
        return response_error();
    }

    public function destroy($id)
    {
        $this->postService->destroy($id);
        return response_success();
    }
}
