<?php

namespace App\Http\Resources;

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
            'id' => $this->id,
            'slug' => $this->slug,
            'photo' => $this->photo,
            'is_parent' => $this->is_parent,
            'parent_id' => $this->parent_id,
            'title' => $this->title,
            'summary' => $this->summary,
            
        ];
    }
}
