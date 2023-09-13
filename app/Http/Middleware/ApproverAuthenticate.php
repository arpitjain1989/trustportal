<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ApproverAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('approver.login');
        }
    }

    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('approver')->check())
        {
            return $this->auth->shouldUse('approver');
        }

        $this->unauthenticated($request, ['approver']);
    }
}
