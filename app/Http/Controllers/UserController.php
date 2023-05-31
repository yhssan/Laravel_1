<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function detail()
    {
        return view('detail');
    }

    public function login()
    {
        return view('login');
    }
    public function home()
    {
        return view('welcome');
    }
    public function form()
    {
        return view('form');
    }
    
}
