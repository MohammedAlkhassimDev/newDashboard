<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'photo' => $this->photo,
            'price' => $this->price,
            'discount' => $this->discount,
            'is_featured' => $this->is_featured,
            'cat_id' => $this->cat_id,
            'child_cat_id' => $this->child_cat_id,
            'brand' => $this->brand_id,
            'condition' => $this->condition,
            'parent_id' => $this->parent_id,

            'title' => $this->title,
            'status' => $this->status,
            'summary' => $this->summary,
            
        ];
    }
}
