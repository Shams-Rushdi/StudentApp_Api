<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;
use Illuminate\Http\Request;

class RolePermissionAdmin
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
        $user = Admin::where('email',session()->get('user'))->first();
        //$user->role == "Admin" || $user->role == "SuperAdmin"
        //$user->role == "Admin"
        if($user->role == "Admin" || $user->role == "SuperAdmin"){
            //return redirect()->route('ums.dash');
            return $next($request);
    
            }
        else{

            return back();
        
            }
    }
}
