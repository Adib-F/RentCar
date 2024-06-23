<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    // public function handle(Request $request, Closure $next, $role): Response // 'admin'
    // {
    //     if (!Auth::check() || Auth::user()->Roles !== $role) {
    //         return redirect()->back();
    //     }
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, ...$roles) // ['admin', 'pengguna']
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized.'], 403);
        }

        $userRole = Auth::user()->Roles;

        if (!in_array($userRole, $roles)) {
            return redirect()->back();
        }

        return $next($request);
    }
}
