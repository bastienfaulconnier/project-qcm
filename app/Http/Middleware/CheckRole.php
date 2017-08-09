<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = 'student')
    {

        if($role === 'student' && $request->user()->role === 'teacher') {

            return redirect()->route('teacher/home');
        }

        if($role === 'teacher' && $request->user()->role !== 'teacher') {

            return redirect()->route('student/home');
        }

        return $next($request);
    }
}
