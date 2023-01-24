<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Api\Actions\GetImage;
use App\Http\Controllers\Api\Actions\LoginAction;
use App\Http\Controllers\Api\Actions\RegisterUser;
use App\Http\Controllers\Api\Actions\GetCategories;
use App\Http\Controllers\Api\Actions\GetCitiesAction;
use App\Http\Controllers\Api\Actions\StoreCategoryBanner;
use App\Http\Controllers\Api\Actions\GetFeaturedCategories;
use App\Http\Controllers\Api\Actions\ShowImage;

Route::post('/login', LoginAction::class);
Route::post('/register', RegisterUser::class);
Route::get('/cities', GetCitiesAction::class);
Route::get('/categories', GetCategories::class);
Route::get('/featured-categories', GetFeaturedCategories::class);
Route::get('/preview-image', GetImage::class);

Route::get('local/temp', ShowImage::class)->name('local.temp');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/upload-category-banner', StoreCategoryBanner::class);