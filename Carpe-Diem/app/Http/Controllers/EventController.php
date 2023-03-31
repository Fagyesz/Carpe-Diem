<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //show all listings
    public function index()
    {
        //dd(request());
        return view('events.index');
    }
}
