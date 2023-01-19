<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class GetSubCategoriesResource extends JsonResource
{
    public function toArray($request)
    {
        $this::withoutWrapping();
        return [
            'id' => $this->id,
            'slug' => Str::slug($this->name),
            'name' => $this->name
        ];
    }
}
