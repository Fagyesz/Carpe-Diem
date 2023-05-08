<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255|unique:users',
        'name' => 'required|string|max:255|regex:/^([^0-9]*)$/',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
    ]);


    $user = User::create([
        'username' => $request->username,
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    if ($request->hasFile('avatar')) {
        $user['avatar'] = $request->file('avatar')->store('avatars', 'public');
    }

    auth()->login($user);

    $user->sendEmailVerificationNotification();

    // Check if user was created and returned
    if ($user) {
        // User was saved successfully
        return redirect()->route('home');
    } else {
        // There was an error saving the user
        return back()->withInput()->withErrors(['error' => 'There was an error creating your account. Please try again later.']);
    }
}

}
