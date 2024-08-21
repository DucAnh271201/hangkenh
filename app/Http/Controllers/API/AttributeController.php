<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\AttrbuteDatableRequest;
use App\Http\Requests\API\AttributeStoreRequest;
use App\Http\Requests\API\AttributeUpdateRequest;
use App\Http\Requests\API\CategoryByTypeRequest;
use App\Http\Requests\API\PostDatableRequest;
use App\Http\Resources\API\AttributeResource;
use App\Services\Attribute\AttributeService;
use Illuminate\Http\Request;

class AttributeController extends Controller
{

    public function __construct(
        private readonly AttributeService $service
    )
    {
    }

    public function getDatable(AttrbuteDatableRequest $request)
    {
        $response = $this->service->getDatable($request);
        return view('admin.pages.attributes.table', [
            'attributes' => $response
        ]);
    }

    public function getAttributes(Request $request)
    {
        $attributes = $this->service->getAttributes($request);

        return response_success(AttributeResource::collection($attributes));
    }


    public function store(AttributeStoreRequest $request)
    {
        $attribute = $this->service->store($request);

        return response_success(new AttributeResource($attribute));
    }



    public function update(AttributeUpdateRequest $request)
    {
        $this->service->update($request);
        return response_success();
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return response_success();
    }
}
