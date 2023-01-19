<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GetCategoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this::withoutWrapping();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'isActive' => $this->isActive,
            'sub' => GetSubCategoriesResource::collection($this->subCategory)
        ];
    }
}
