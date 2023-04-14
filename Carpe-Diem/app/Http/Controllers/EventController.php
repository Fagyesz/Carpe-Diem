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

    //Show event listing page
    public function showEvents() {
        return view('events.events_listing', [
            'events' => Event::latest()->paginate(10)
        ]);
    }

    //Store event create Data
    public function store(Request $request)
    {
        //dd($request -> all());
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'organizer' => 'required',
            'ticket_price' => 'required',
            'tickets_available' => 'required'
        ]);


        Event::create($formFields);

        return redirect('/')->with('message', 'Event created succesfully!');
    }
    
    //show all listings
    public function index()
    {
        //dd(request());
        return view('events.index');

    }


}
