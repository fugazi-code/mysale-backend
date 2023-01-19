<?php

namespace App\Http\Controllers\Api\Actions;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GetCategoriesResource;

class GetCategories extends Controller
{
    public function __invoke()
    {
        $category = Category::with(['subCategory'])->get();

        return GetCategoriesResource::collection($category);
    }
}