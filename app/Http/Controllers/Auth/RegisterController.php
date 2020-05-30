<?php

namespace App\Http\Auth\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected function register(Request $request, User $user)
    {
        $user->generateToken();

        return response()->json(['data' => $user->toArray()], 201);
    }
}
