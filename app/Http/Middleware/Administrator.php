<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Administrator
{
    private $auth;

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
        if ( $this->auth->user()->id_user_type != 1 ) {

            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to('/user');
            }

        } elseif ( $this->auth->user()->status == false ) {
            return redirect()->to('auth/logout');
        }

        return $next($request);
    }
}
