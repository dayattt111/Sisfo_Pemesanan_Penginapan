<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    // login & regist
    public function index(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function backLogin(){
        return view('/');
    }

    // Admin Role


    // Users Role
    public function dashboardUser(){
        return view('users/index');
    }


}
