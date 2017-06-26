<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

abstract class IsType
{
    private $auth;
    private $redirectUser;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    abstract public function getType();

    public function getRedirect()
    {
        if ( $this->auth->user()->is(1) )
            $this->redirectUser = '/admin';

        if ( $this->auth->user()->is(2) )
            $this->redirectUser = '/user';
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
        if ( ! $this->auth->user()->is( $this->getType() ) ) {

            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to($this->redirectUser);
            }

        } elseif ( $this->auth->user()->status == false ) {
                return redirect()->to('auth/logout');
        }

        return $next($request);
    }
}
