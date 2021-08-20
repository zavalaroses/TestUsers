<?php

namespace App\Http\Controllers\Auth;
use App\Models\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        
        if (auth()->check()) {
            if (auth()->user()->rol == 'admin') {
                $users = Users::all();
                return view('pages.user.index', compact('users'));
            }
            if (auth()->user()->rol == 'SuperUsuario') {
                return view('pages.super.create');
            }
            if (auth()->user()->rol == 'Supervisor') {
                $users = Users::all();
                return view('pages.supervisor.index', compact('users'));
            }
            
        }else{
            return redirect()->to('/');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
