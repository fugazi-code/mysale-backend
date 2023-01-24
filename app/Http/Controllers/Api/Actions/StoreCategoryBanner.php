<?php

namespace App\Http\Controllers\Api\Actions;

use App\Http\Controllers\Controller;
use App\Http\Resources\StoreCategoryBannerResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreCategoryBanner extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banner', 'public');

            $category = Category::find($request->get('category_id'));
            Storage::delete('public/'.$category->banner);
            $category->banner = $path;
            $category->save();
            return new StoreCategoryBannerResource($category);
        }

        return response('Image file required.', 400);
    }
}
