<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $pageName = 'Home';
        return view('home.index', compact('pageName'));
    }

    public function about(){
        $pageName = 'About';
        return view('home.about', compact('pageName'));
    }
}
