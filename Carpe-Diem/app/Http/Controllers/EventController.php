<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //Show event create form
    public function create()
    {
        return view('events.create');
    }

    //Show event listing page
    public function showEvents()
    {
        return view('events.events_listing', [
            'events' => Event::latest()->filter(request(['search']))->paginate(9),
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
            'title' => 'required|string',
            'description' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required|string',
            'ticket_price' => 'required|decimal:0,2',
            'tickets_available' => 'required|integer',
        ]);

        if ($request->hasFile('event_image')) {
            $formFields['event_image'] = $request->file('event_image')->store('event_images', 'public');
        }
        if ($formFields['end_time'] < $formFields['start_time']) {
            toastr()->error('End time can not be earlier, then the Start time!', 'Oops!');
            return back();

        }
        if ($formFields['ticket_price'] <= 0) {
            toastr()->error('Ticket price can not be 0 or negative!', 'Oops!');
            return back();

        }
        if ($formFields['tickets_available'] <= 0) {
            toastr()->error('Available tickets can not be 0 or negative!', 'Oops!');
            return back();

        }

        $formFields['organizer_id'] = $request->user()->id;

        Event::create($formFields);

        toastr()->success('Event created succesfully!', 'Congrats');
        return redirect('/');

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
            'ticket_price' => 'required|decimal:0,2',
            'tickets_available' => 'required|integer',
        ]);

        if ($request->hasFile('event_image')) {
            $formFields['event_image'] = $request->file('event_image')->store('event_images', 'public');
        }
        if ($formFields['end_time'] < $formFields['start_time']) {
            toastr()->error('End time can not be earlier, then the Start time!', 'Oops!');
            return back();

        }
        if ($formFields['ticket_price'] <= 0) {
            toastr()->error('Ticket price can not be 0 or negative!', 'Oops!');
            return back();

        }
        if ($formFields['tickets_available'] <= 0) {
            toastr()->error('Available tickets can not be 0 or negative!', 'Oops!');
            return back();

        }

        $event->update($formFields);
        toastr()->success('Event updated succesfully!');
        return back();

    }

    //Delete event
    public function destroy(Event $event)
    {
        $event->delete();
        toastr()->success('Event deleted succesfully!', 'Congrats');
        return redirect('/events');

    }

    //show all listings
    public function index()
    {
        //dd(request());
        $topThreeEvents = Event::topThree()->get();

        return view('events.index', compact('topThreeEvents'));

    }
    //show single listing
    public function show(Event $event)
    {

        $organizer = DB::table('users')->where('id', $event['organizer_id'])->pluck('name');

        $startTime = Carbon::parse($event->start_time);
        $endTime = Carbon::parse($event->end_time);

        $totalDuration = $startTime->diffInHours($endTime) . " Hours";
        $shareButtons = \Share::page(
            url('/events', $event->id)

        )
            ->facebook()
            ->twitter()
            ->whatsapp()
            ->reddit();

        return view('events.show', [
            'event' => $event,
            'organizer' => $organizer,
            'totalDuration' => $totalDuration,
        ], compact('shareButtons'));
    }

}
