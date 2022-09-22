<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $value = Session::get('loginData');
        $type = $value['user']['type'];
        if ($type == "admin" || $type == "super_admin") {
            return $next($request);
        }
        $message = session::flash('message', "Only admins can access");
        return redirect('/admin')->with('error', $message);
        // if (auth()->user()->type == 'admin') {
        //     return $next($request);
        // }
        // return redirect('/')->with('error', "you don't have admin access");
    }
}
