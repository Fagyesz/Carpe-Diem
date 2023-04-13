<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class API extends Controller
{
    function getAllUsers()
    {
        $users = DB::table('users')->get();
        return $users;
    }

    function getUserById($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return $user;
    }

    function createUser(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        $result = $user->save();
        if($result)
        {
            return ["Result" => "Data has been saved"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function updateUser(Request $request)
    {
        $data = User::find($request->id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $result = $data->save();
        if($result)
        {
            return ["Result" => "Data has been updated"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function deleteUser($id)
    {
        $data = User::find($id);
        $result = $data->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }
}
