<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->usuario())
        {
            return $next($request);
        }
        elseif($this->auth->user()->teacher())
        {
            return $next($request);
        }
        elseif($this->auth->user()->students())
        {
            return $next($request);
        }
        else
        {
            abort(401);
        }
        
    }
}
