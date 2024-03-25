<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }
    public function login()
    {

        return view('Login.login');
    }
    public function agenda() {

        return view('Landing.agenda-detail');
    }
}
