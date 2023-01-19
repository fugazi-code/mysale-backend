<?php

namespace App\Http\Controllers\Api\Actions;

use App\Http\Controllers\Controller;
use App\Http\Resources\GetCitiesResource;
use App\Models\Cities;
use Illuminate\Http\Request;

class GetCitiesAction extends Controller
{
    public function __invoke()
    {
        $cities = Cities::all();

        return GetCitiesResource::collection($cities);
    }
}
