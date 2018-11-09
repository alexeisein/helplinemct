<?php

namespace FreeNation\Http\Controllers\Auth;

use Illuminate\Http\Request;
use FreeNation\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use User;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $gitUser = Socialite::driver($provider)->user();

        $user = User::findOrNew(['provider_id' => $gitUser->id]);

        $user->name = $gitUser->name;
        $user->email = $gitUser->email;
        $user->provider = $provider;

        $user->save();

        auth()->login($user);

        return redirect()->intended('home');

    }
}
