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
}
