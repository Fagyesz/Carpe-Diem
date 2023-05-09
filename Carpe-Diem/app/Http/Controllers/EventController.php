<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Arr;
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
            'ticket_price' => 'required|numeric',
            'tickets_available' => 'required|numeric'
        ]);

        if ($request->hasFile('event_image')) {
            $formFields['event_image'] = $request->file('event_image')->store('event_images', 'public');
        }
        if($formFields['end_time'] < $formFields['start_time'])
        {
            return back()->with('message', 'End time can not be earlier, then the Start time!');
        }
        if($formFields['ticket_price'] <= 0) 
        {
            return back()->with('message', 'Ticket price can not be 0 or negative!');
        }
        if($formFields['tickets_available'] <= 0) 
        {
            return back()->with('message', ' Available tickets can not be 0 or negative!');
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
            'ticket_price' => 'required|numeric',
            'tickets_available' => 'required|numeric'
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
        $count = 0;
        $events = DB::select('select * from events');
        if(count($events) > 0) 
        {


            for($i = 0; $i < count($events); $i++) 
            {
                $randomEvent = Arr::random($events);
                $count++;
                if($randomEvent->event_image != null)
                {
                    break;
                }
            }

            if($count < count($events)) 
            {
                $randomImage = 'storage/' .$randomEvent->event_image;
                
            }else
            {
                $randomImage = "/images/CD-logo2.png";      
            }
            
        }
        else
        {
            $randomImage = "/images/no_event.png";
        }

        $hotEvents = DB::table('tickets')->select('event_id', DB::raw("COUNT('event_id') AS ticket_count"))
                                         ->join('events', 'event_id', '=', 'event_id')
                                         ->orderBy('ticket_count', 'desc')
                                         ->groupBy('event_id')
                                         ->take(3)
                                         ->get();
                                       
       

        if(count($hotEvents) == 3) 
        {
            $number1 = DB::table('events')->where('id', $hotEvents[0]->event_id)->first();
            $number2 = DB::table('events')->where('id', $hotEvents[1]->event_id)->first();
            $number3 = DB::table('events')->where('id', $hotEvents[2]->event_id)->first();

            return view('events.index', ['randomImage' => $randomImage,
                                       'number1' => $number1,
                                       'number2' => $number2,
                                       'number3' => $number3,
                                        'isEmpty'=> false ]);
        }
        else
        {
            $hotEvents = DB::table('events')->select('id')->orderBy('Start_time')
                                                          ->take(3)
                                                          ->get();
            if(count($hotEvents) == 3)
            {

            $number1 = DB::table('events')->where('id', $hotEvents[2]->id)->first();
            $number2 = DB::table('events')->where('id', $hotEvents[1]->id)->first();
            $number3 = DB::table('events')->where('id', $hotEvents[0]->id)->first();

            return view('events.index', ['randomImage' => $randomImage,
                                        'number1' => $number1,
                                        'number2' => $number2,
                                        'number3' => $number3,
                                        'isEmpty'=> false ]);
            }


            return view('events.index', ['randomImage' => $randomImage,
            'isEmpty' => true]);

        }


                                    //megcsinálni: ha nincsen 3 eventnyi jegy, akkor a 3 legfrissebb event, ha nincs annyi event akkor eltünik

    }


    //show single listing
    public function show(Event $event)
    {

        $organizer = DB::table('users')->where('id', $event['organizer_id'])->pluck('name');

        $startTime = Carbon::parse($event->start_time);
        $endTime = Carbon::parse($event->end_time);
    
        $totalDuration =  $startTime->diffInHours($endTime)." Hours";
        $shareButtons=\Share::page(
            url('/events', $event->id)
            
        )
        ->facebook()
        ->twitter()
        ->whatsapp()
        ->reddit();

        return view('events.show', [
            'event' => $event,
            'organizer' => $organizer,
            'totalDuration' => $totalDuration
        ],compact('shareButtons'));
    }



}
