<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request): Response
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)){
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return response()->noContent();
    }
}
