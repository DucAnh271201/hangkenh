<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Attribute\AttributeService;
use Illuminate\Http\Request;

class AttributeManagerController extends Controller
{

    public function __construct(
        private readonly AttributeService $service
    )
    {
    }

    public function index(Request $request)
    {
        $parentId = $request->get('parent_id');
        $breadcrumbs = null;
        if ($parentId) {
            $attribute = $this->service->getById($parentId); // $id là ID của danh mục hiện tại
            $breadcrumbs = $attribute->getBreadcrumbs();
        }

        return view('admin.pages.attributes.index', [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    public function create(Request $request)
    {
        $parentId = $request->get('parent_id');
        $attributeWithParent = $this->service->getSameParentId(0,$parentId);

        return view('admin.pages.attributes.create', [
            'attributes' => $attributeWithParent,
        ]);
    }

    public function edit($id)
    {
        $attribute = $this->service->getById($id);
        $attributeWithParent = $this->service->getSameParentId($attribute->id,$attribute->parent_id);
        return view('admin.pages.attributes.edit', [
            'attribute' => $attribute,
            'attributes' => $attributeWithParent,
        ]);
    }

}
