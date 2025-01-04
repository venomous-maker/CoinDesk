<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * @return View
     */
    public function assets(): View
    {
        return view('finance.assets');
    }
}
