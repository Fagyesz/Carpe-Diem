<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\DB;


class QrCodeController extends Controller
{
    //Show selected ticket
    public function index(Ticket $ticket)
    {
        //$user = Auth::user();

        $event = DB::table('events')->where('id', $ticket['event_id'])->first();
        $user = DB::table('users')->where('id', $ticket['user_id']);

      return view('tickets.ticket', ['ticket' => $ticket,
                                    'event' => $event,
                                    'user' => $user,

                                  ]);
    }

    //Generate a ticket for the chosen event
    public function store(Request $request, Event $event) 
    {
        $user = Auth::user();
        $quantity = $request['quantity'];

        if($event['tickets_available'] - $quantity < 0 ) 
        {
          return back()->with('message', 'No remaining tickets! Transaction cancelled!');
        }

        for($i = 0; $i < $quantity; $i++) 
        {
          $random = Str::random(30);
          $image = QrCode::format('png')
          ->size(300)->errorCorrection('H')
          ->generate($random);

          $file_name = time().'.png';
          $output_file = '/public/QrCode_images/'.$file_name;
          Storage::disk('local')->put($output_file, $image);
          $imgurl = 'QrCode_images/'.$file_name;

          $ticket = ([
            'user_id' => $user->id,
            'ticket_code' => $random,
            'ticket_image_url' => $imgurl,
            'event_id' => $event->id,
            'ticket_type' => 'QR Code',
            'ticket_price' => $event->ticket_price,
            'ticket_status' => 'Unused'

          ]);

          Ticket::create($ticket);


        }
        $available = $event['tickets_available'] - $quantity;
        DB::table('events')
              ->where('id', $event->id)
              ->update(['tickets_available' => $available]);
        

        return back()->with('message', $quantity.'x Ticket generated succesfully!');
    }


}