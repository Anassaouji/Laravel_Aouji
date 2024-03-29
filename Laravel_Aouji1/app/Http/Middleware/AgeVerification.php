<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeVerification
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
        $age = $request->age;
        if ($age >= 18) {
            return $next($request);
            // return redirect()->route('about');
        }
        // dd('vous etes menour ');
        return redirect("/");
        // ila kan sghir ghadi raj3o l'welcome
    }
}
