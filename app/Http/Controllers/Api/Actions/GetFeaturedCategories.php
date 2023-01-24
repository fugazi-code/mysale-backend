<?php

namespace App\Http\Controllers\Api\Actions;

use App\Http\Controllers\Controller;
use App\Http\Resources\GetFeaturedCategoriesResource;
use App\Models\Category;
use Illuminate\Http\Request;

class GetFeaturedCategories extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $categoryNames = [
            "Cars For Sale",
            "Mobile Phones & Gadgets",
            "Furniture & Home Living",
            "Hobbies & Toys",
            "Pet Supplies",
        ];

        $category = Category::query()
            ->whereIn('name', $categoryNames)
            ->withCount(['post'])
            ->get();

        return GetFeaturedCategoriesResource::collection($category);
    }
}
