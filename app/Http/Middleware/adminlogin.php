<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class adminlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            # code...
            $user = Auth::User();
            if ($user->level == 1) 
                # code...
                return $next($request);
            else
                Session()->flash('warning', 'Sorry !! You Can\'t  login admin');
                return redirect('admin/login');
            
            } else {
                # code...
                
                return redirect('admin/login');
            }
        
    }
}
