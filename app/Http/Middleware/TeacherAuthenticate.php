<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class TeacherAuthenticate extends Middleware
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
            return route('teacher.login');
        }
    }

    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('teacher')->check())
        {
            return $this->auth->shouldUse('teacher');
        }

        $this->unauthenticated($request, ['teacher']);
    }
}
