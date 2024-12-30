<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TradingController extends Controller
{
    public function index(Request $request){
        return view('trade.trading');
    }

}
