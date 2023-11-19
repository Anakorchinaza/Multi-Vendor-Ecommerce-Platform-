<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Flasher\Prime\FlasherInterface;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request, FlasherInterface $flasher): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url = '';

        if ($request->user()->role === 'admin') {
           $url = 'admin/dashboard';
        }elseif ($request->user()->role === 'vendor') {
            $url = 'vendor/dashboard';
        }elseif ($request->user()->role === 'user') {
            $url = 'dashboard';
        }

        //dd($url);
        
        // Debug: Add this line to check the role identified
        //dd($request->user()->role);

        $flasher->addSuccess('Login successfully!');
        return redirect()->intended($url);
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
