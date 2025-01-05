<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TradingController extends Controller
{
    public function index(Request $request){
        $pageName = 'Trading';
        $symbol = $request->query('tvwidgetsymbol') ?? "BITSTAMP:BTCUSD";
        return view('trade.trading', compact(['pageName', 'symbol']));
    }

    public function perpetual(Request $request){
        $pageName = 'Perpetual';
        $symbol = $request->query('tvwidgetsymbol') ?? "BITSTAMP:BTCUSD";
        return view('trade.trading', compact(['pageName', 'symbol']));
    }

    public function spot(Request $request){
        $pageName = 'Spot';
        $symbol = $request->query('tvwidgetsymbol') ?? "BITSTAMP:BTCUSD";
        return view('trade.spot', compact(['pageName', 'symbol']));
    }

}
