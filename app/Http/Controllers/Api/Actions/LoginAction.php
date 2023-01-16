<?php

namespace App\Http\Controllers\Api\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginAction extends Controller
{
    public function __invoke()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', request('email'))->first();

        if (! $user || ! Hash::check(request('email'), request('password'))) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken(request('device_name'))->plainTextToken;
    }
}
