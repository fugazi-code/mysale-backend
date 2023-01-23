<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Actions\LoginAction;
use App\Http\Controllers\Api\Actions\GetCategories;
use App\Http\Controllers\Api\Actions\GetCitiesAction;
use App\Http\Controllers\Api\Actions\GetImage;

Route::post('/login', LoginAction::class);
Route::get('/cities', GetCitiesAction::class);
Route::get('/categories', GetCategories::class);
Route::get('/preview-image', GetImage::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
