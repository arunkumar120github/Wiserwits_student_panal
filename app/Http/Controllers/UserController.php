<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pages.profile');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }

    public function courses(){
        return view('pages.courses');
    }
}
