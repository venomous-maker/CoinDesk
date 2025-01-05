<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class FinanceController extends Controller
{
     /**
     * @return
     */
    public function assets()
    {
        $pageName = 'Assets';
        return view('finance.assets', compact('pageName'));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function aiQuantization(){
        $pageName = 'AI Quantization';
        return view('finance.ai-quantization', compact('pageName'));
    }
}
