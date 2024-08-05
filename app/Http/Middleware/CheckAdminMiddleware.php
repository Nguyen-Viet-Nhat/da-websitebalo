<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                return $next($request);
            } else {
                return redirect()->route('client.viewClient');
            }
        } else {
            return redirect()->route('client.loginUsers')->with([
                'message' => 'Bạn chưa đăng nhập!'
            ]);
        }

    }
}
