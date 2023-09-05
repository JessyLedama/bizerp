<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $adminRole = Role::where('name', 'Admin')->first();

        $user = Auth::user();

        if($user->roleId == $adminRole->id)
        {
            return $next($request);   
        }
        else 
        {
            return abort(401);
        }
    }
}
