<?php

namespace App\Http\Controllers\Api\Actions;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RegisterUser extends Controller
{

    public function __invoke(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), User::$createRules);

            if ($validator->fails()) {
                return response()->json(
                    ['message' => $validator->errors()->all()],
                    Response::HTTP_BAD_REQUEST
                );
            }

            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            return response()->noContent(Response::HTTP_CREATED);
        } catch (\Throwable$e) {
            return response()->json(
                ['message' => $e->getMessage()],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
