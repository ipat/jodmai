<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $is_admin = $user->is_admin;
        if($is_admin == 0)
          return redirect('home')->with('error', 'คุณไม่มีสิทธิ์เข้าหน้าเว็บนี้');
        return $next($request);
    }
}
