<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
        else {
            if(auth()->user()->is_branch == 1){
                //return $next($request);
<<<<<<< HEAD
                return redirect('branch/home')->with('errors',"You don't have admin access.");
            }
            else {
                return redirect('home')->with('errors',"You don't have admin access.");
            }  
              } 
   
        //return ("error You don't have admin access.");
        //return redirect('home')->with('error',"You don't have admin access.");
=======
                return redirect('branch/home')->with('error',"You don't have admin access.");
            }
            else {
                return redirect('home')->with('error',"You don't have admin access.");
            }
        }
   
        //return ("error You don't have admin access.");
        return redirect('home')->with('error',"You don't have admin access.");
>>>>>>> bd29926cdf040d1a42a8276f5c672a1c94d8bfb9
    }
}