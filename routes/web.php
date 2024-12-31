<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Trade\TradingController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Market\MarketController;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/trade')->name('trade.')->group(function (){
    Route::get('/trading', [TradingController::class, 'index'])->name('trading');
});

Route::prefix('/home')->name('home.')->group(function (){
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
});

Route::prefix('/markets')->name('market.')->group(function (){
    Route::get('/index', [MarketController::class, 'index'])->name('index');
});
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
