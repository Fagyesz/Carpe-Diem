<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
    //show all listings
    public function index()
    {
        //dd(request());
        return view('events.index');

    }
    //show single listing
    public function show(Event $event)
    {

        $organizer = DB::table('users')->where('id', $event['organizer_id'])->pluck('name');

        $startTime = Carbon::parse($event->start_time);
        $endTime = Carbon::parse($event->end_time);
    
        $totalDuration =  $startTime->diffInHours($endTime)." Hours";

        return view('events.show', [
            'event' => $event,
            'organizer' => $organizer,
            'totalDuration' => $totalDuration
        ]);
    }



}
