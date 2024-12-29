<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public API Route
Route::get('/asset/imported/link', function (Request $request) {
    $path = $request->query('path'); // Get the 'path' query parameter
    return response()->json([
        'link' => asset('assets/' . $path), // Generate the full asset URL
    ]);
});

// Protected API Routes (Require Authentication)
Route::middleware('auth:sanctum')->group(function () {

});
