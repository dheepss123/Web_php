<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function User()
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

    // Show User
    public function ShowUser(User $user)
    {
        return view("users.show", [ 
            'user' => $user,
        ]);
    }

    // User Edit
    public function HalamanEditUser(User $user){
        return view('users.edit', [
            'user' => $user,
        ]);
    }
    public function EditUser(UserRequest $request, User $user){
        $user->update($request->validated());
        return redirect('/user');
    }

    // Delete User
    public function DeleteUser(User $user){
        $user->delete();
        return redirect('/user');
    }
}
