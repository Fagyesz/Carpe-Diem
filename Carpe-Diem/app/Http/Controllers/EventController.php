<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //Show event create form
    public function create() {
        return view('events.create');
    }

}
