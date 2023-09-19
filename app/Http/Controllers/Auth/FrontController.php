<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function login(){
        return view('front.auth.login');
    }

    public function register(){
        return view('front.auth.register');
    }
}