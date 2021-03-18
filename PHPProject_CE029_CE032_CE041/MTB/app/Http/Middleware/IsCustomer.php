<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);

        if(auth()->user()->is_customer == 1){
            return $next($request);
        }
        else {
            if(auth()->user()->is_admin == 1){
                //return $next($request)\
                return redirect('admin/home')->with('errors',"You don't have customer access.");
            }
            else {
                return redirect('branch/home')->with('errors',"You don't have customer access.");
            }
        }  
   
        //return ("error You don't have admin access.");
        //return redirect('home')->with('error',"You don't have admin access.");
    }
}
