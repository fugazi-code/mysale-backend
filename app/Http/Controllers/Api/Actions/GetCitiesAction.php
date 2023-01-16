<?php

namespace App\Http\Controllers\Api\Actions;

use App\Http\Controllers\Controller;
use App\Http\Resources\GetCitiesResource;
use App\Models\Cities;
use Illuminate\Http\Request;

class GetCitiesAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cities = Cities::all();

        return GetCitiesResource::collection($cities);
    }
}
