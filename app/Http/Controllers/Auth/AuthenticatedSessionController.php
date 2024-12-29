<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        // Check if the request expects JSON (AJAX request)
        if ($request->wantsJson()) {
            // Attempt authentication
            if (Auth::attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();

                // Return success response
                return response()->json([
                    'message' => 'Login successful!',
                    'redirect' => route('home'),
                ]);
            }

            // Return error response if authentication fails
            return response()->json([
                'message' => 'Invalid credentials.',
            ], 401);
        }

        // If not a JSON request (normal request), proceed as usual
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('home', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
