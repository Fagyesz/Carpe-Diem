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
            'events' => Event::latest()->filter(request(['search']))->paginate(9)
        ]);
    }

    //Show event edit page
    public function edit(Event $event)
    {
        return view('events.edit', ['event' => $event]);
    }

    //Store event create Data
    public function store(Request $request)
    {
        //dd($request -> file('event_image'));
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

        if ($request->hasFile('event_image')) {
            $formFields['event_image'] = $request->file('event_image')->store('event_images', 'public');
        }

        $formFields['organizer_id'] = $request->user()->id;

        Event::create($formFields);

        return redirect('/')->with('message', 'Event created succesfully!');
    }

    //Update events
    public function update(Request $request, Event $event)
    {
        //dd($request -> file('event_image'));
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'ticket_price' => 'required',
            'tickets_available' => 'required'
        ]);

        if ($request->hasFile('event_image')) {
            $formFields['event_image'] = $request->file('event_image')->store('event_images', 'public');
        }

        $event->update($formFields);

        return back()->with('message', 'Event updated succesfully!');
    }

    //Delete event
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect('/events')->with('message', 'Event deleted succesfully!');
    }
    
    //show all listings
    public function index()
    {
        //dd(request());
        return view('events.index');

    }


}
