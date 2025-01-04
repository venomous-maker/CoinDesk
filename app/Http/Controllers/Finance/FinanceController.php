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
        return view('finance.assets');
    }
    /**
     * @return View
     */
    public function aiQuantization(){
        $pageName = 'AI Quantization';
        return view('finance.ai-quantization', compact('pageName'));
    }
}
