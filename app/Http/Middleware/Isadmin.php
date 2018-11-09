<?php

namespace FreeNation\Http\Middleware;

use Closure;
use Auth;
use FreeNation\User;

class Isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        $authUserId='';
        if (Auth::check()) {
            $authUserId = Auth::user()->id;

            $userObj = User::findOrFail($authUserId);
            if ($permission == $userObj->permission) {
                return $next($request);
            }
            session()->flash('access_error', 'Permission Denied !');
            return redirect()->route('homepage');
        }
        session()->flash('access_error', 'Please, login in to proceed !');
        return redirect()->route('login');
        //$accessUsers = User::select('username')->where('permission', 'admin')->get(); //gets the specific user.
    }
}
