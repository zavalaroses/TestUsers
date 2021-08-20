<?php

namespace App\Http\Middleware;
use App\Models\Users;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    
          
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
}
