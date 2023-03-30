<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //Show event create form
    public function create() {
        return view('events.create');
    }

}
