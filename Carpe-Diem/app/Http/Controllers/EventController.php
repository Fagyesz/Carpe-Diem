<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
