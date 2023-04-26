<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show() 
    {   
        $user = Auth::user();
        $listedEvents = DB::table('events')->where('organizer_id', $user['id'])->count();

        return view('auth.profile', ['user'=> $user,
                                    'listedEvents' => $listedEvents]);
    }

    public function showEdit() 
    {
        $user = Auth::user();

        return view('auth.editProfile', ['user'=> $user]);
    }

    //Update profile
    public function update(Request $request)
    {
        $user = Auth::user();
        $formFields = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'nullable',
            'phone' => 'nullable',
            'country' => 'nullable',
            'address' => 'nullable',
            'gender' => 'nullable',
            'bio' => 'nullable'
        ]);

        if ($request->hasFile('avatar')) {
            $formFields['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($formFields);

        return back()->with('message', 'Profile edited succesfully!');
    }
}
