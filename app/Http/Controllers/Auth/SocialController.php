<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        // Find or create a user based on the OAuth provider's user object
        $authUser = $this->findOrCreateUser($user, $provider);
        \Log::info("message");

        // Log the user in
        Auth::login($authUser, true);

        return redirect('/'); // Redirect to the desired page after successful login
    }

    protected function findOrCreateUser($providerUser, $provider)
    {
        $user = User::where('provider_id', $providerUser->getId())->where('provider', $provider)->first();

        if (!$user) {
            \Log::info('Creating new user from provider', ['provider' => $provider, 'providerUser' => $providerUser]);

            $user = User::create([
                'name' => $providerUser->getName(),
                'username' => $providerUser->getNickname(),
                'email' => $providerUser->getEmail(),
                'avatar' => $providerUser->getAvatar(),
                'provider' => $provider,
                'provider_id' => $providerUser->getId(),
                'provider_token' => $providerUser->token,
            ]);

            \Log::info('User created', ['user' => $user]);
        } else {
            \Log::info('User found', ['user' => $user]);
        }

        return $user;
    }
}
