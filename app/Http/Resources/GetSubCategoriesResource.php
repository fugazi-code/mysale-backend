<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GetSubCategoriesResource extends JsonResource
{
    public function toArray($request)
    {
        $this::withoutWrapping();
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
