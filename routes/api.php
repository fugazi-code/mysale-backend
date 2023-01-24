<?php

use App\Http\Controllers\Api\Actions\GetCategories;
use App\Http\Controllers\Api\Actions\GetCitiesAction;
use App\Http\Controllers\Api\Actions\GetFeaturedCategories;
use App\Http\Controllers\Api\Actions\GetImage;
use App\Http\Controllers\Api\Actions\LoginAction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::post('/login', LoginAction::class);
Route::get('/cities', GetCitiesAction::class);
Route::get('/categories', GetCategories::class);
Route::get('/featured-categories', GetFeaturedCategories::class);
Route::get('/preview-image', GetImage::class);

Route::get('local/temp/{path}', fn(string $path) => Storage::download('public/' . $path))
    ->name('local.temp');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
