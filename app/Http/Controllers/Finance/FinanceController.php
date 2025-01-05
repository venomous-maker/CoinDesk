<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class FinanceController extends Controller
{
     /**
     * @return Factory|View|Application
     */
    public function assets(): Factory|View|Application
    {
        $pageName = 'Assets';
        return view('finance.assets', compact('pageName'));
    }
    /**
     * @return Factory|View|Application
     */
    public function aiQuantization(): Factory|View|Application
    {
        $pageName = 'AI Quantization';
        return view('finance.ai-quantization', compact('pageName'));
    }

    /**
     * @return Factory|View|Application
     */
    public function defiLoan(): Factory|View|Application
    {
        $pageName = 'Defi Loan';
        return view('finance.defi-loan', compact('pageName'));
    }
    /**
     * @return Factory|View|Application
     */
    public function creditLending(): Factory|View|Application
    {
        $pageName = 'Credit Lending';
        return view('finance.credit-lending', compact('pageName'));
    }
}
