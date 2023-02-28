<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsVerifyEmail
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
        if (!Auth::user()->is_email_verified) {
            auth()->logout();
            return redirect()->route('affichage_connection')
                ->with('message', "Administrateur devez confirmer votre compte. Nous vous avons envoyé un e-mail lors d'activation, veuillez vérifier votre e-mail.");
        }
        return $next($request);
    }
}
