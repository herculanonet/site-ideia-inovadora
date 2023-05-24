<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function blog() 
    {
        return view('blog');
    }

    public function about() 
    {
        return view('about');
    }

    public function pricing() 
    {
        return view('pricing');
    }

    public function faqs() 
    {
        return view('faqs');
    }

    public function image() 
    {
        return view('image');
    }

    public function register() 
    {
        return view('register');
    }

    public function login() 
    {
        return view('login');
    }
}

