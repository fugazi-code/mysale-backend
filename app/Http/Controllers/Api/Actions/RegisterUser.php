<?php

namespace App\Http\Controllers\Api\Actions;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

use Validator;

class RegisterUser extends Controller {
    
    public function __invoke(Request $request) {
        
        try {
            $validator = Validator::make($request->all(), User::rules('create'));

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->all()], Response::HTTP_BAD_REQUEST);
            }

            $hashedPassword = Hash::make($request->input('password'));
            
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $hashedPassword,
            ]);

            return response()->noContent(Response::HTTP_CREATED);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}