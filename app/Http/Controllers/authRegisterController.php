<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authRegisterController extends Controller
{
    //
    public function register(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }
}
