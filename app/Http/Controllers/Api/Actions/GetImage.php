<?php

namespace App\Http\Controllers\Api\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;

class GetImage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            return Storage::url($request->get('path'));
        } catch (Throwable $e) {
            abort(500, $e->getMessage());
        }
    }
}
