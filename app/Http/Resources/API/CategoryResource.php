<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ?? '',
            'title' => $this->title ?? '',
            'title_dept' => $this->title_dept ?? '',
            'slug' => $this->slug ?? '',
            'dept' => $this->dept ?? '',
            'parent_id' => $this->parent_id ?? ''
        ];
    }
}
