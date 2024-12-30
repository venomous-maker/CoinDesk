<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function index(){
        return view('markets.index');
    }
}
