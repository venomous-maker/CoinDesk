<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;

class FinanceController extends Controller
{
    public function index(){

    }

    public function aiQuantization(){
        $pageName = 'AI Quantization';
        return view('finance.ai-quantization', compact('pageName'));
    }
}
