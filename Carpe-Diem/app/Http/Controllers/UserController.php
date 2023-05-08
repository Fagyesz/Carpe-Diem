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
        $soldTickets = 0;
        $user = Auth::user();
        $listedEvents = DB::table('events')->where('organizer_id', $user['id'])->count();
        $boughtTickets = DB::table('tickets')->where('user_id', $user['id'])->count();
        $events = DB::select('select * from events where organizer_id = '.$user['id']);

        foreach($events as $event)
        {
            $soldTickets += DB::table('tickets')->where('event_id', $event->id)->count();
        }


        return view('auth.profile', ['user'=> $user,
                                    'listedEvents' => $listedEvents,
                                    'boughtTickets' => $boughtTickets,
                                    'soldTickets' => $soldTickets
                                ]);
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
            'name' => 'required|regex:/^([^0-9]*)$/',
            'email' => 'required|email',
            'birthdate' => 'nullable',
            'phone' => 'nullable|regex:/[0-9]{2}-[0-9]{2}-[0-9]{3}-[0-9]{4}/',
            'country' => 'nullable|regex:/^([^0-9]*)$/',
            'address' => 'nullable',
            'gender' => 'nullable',
            'bio' => 'nullable'
        ]);

        if ($request->hasFile('avatar')) {
            $formFields['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($formFields);
        toastr()->success('Profile edited succesfully!', 'Congrats');
        return back();
    }
}
