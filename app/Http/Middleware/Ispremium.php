<?php

namespace FreeNation\Http\Middleware;

use Closure;
use FreeNation\User;
use Auth;
class Ispremium
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $username)
    {
        // Giving priviledge to a certain user
        $authUname = '';
        $authUId = '';
        if (Auth::check()) {
            $authUname = Auth::user()->username; //gets the current the login username
            $authUId = Auth::user()->id; 
        }
        // dd($authUId);
        $premiumUser = User::find($authUId=1); //gets the specific user id.
        // dd($premiumUser->username);
        if ($premiumUser) {
            if ($username == $premiumUser->username && $username == $authUname) {
                return $next($request);
            }
            session()->flash('access_error', 'Only ' .ucwords($premiumUser->username) .' is allowed !');
            return redirect()->route('homepage');
        }
    //     // dd('user not found');
        
    }
}
