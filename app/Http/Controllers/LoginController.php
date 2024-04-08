<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Pest\Laravel\get;

class LoginController extends Controller
{
    public function HalamanLogin()
    {
        return view('login/login');
    }

    public function HalamanRegister()
    {
        return view('login/register');
    }
}
