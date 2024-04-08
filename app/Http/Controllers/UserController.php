<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function HalamanUser()
    {
        $user =User::query()->latest()->get();
        return view('users.user',[
            'user' => $user
        ]);
    }



    // User Register
    public function UserRegister(UserRequest $request)
    {
        User::create($request->validated());
        return redirect('/user');

    }
}
