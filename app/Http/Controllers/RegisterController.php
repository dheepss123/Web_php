<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function HalamanRegister()
    {
        return view('login/register');
    }
    public function UserRegister(UserRequest $request)
    {
        User::create($request->validated());
        return redirect('/user');

    }
}
