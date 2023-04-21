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
      return view('tickets.ticket', ['ticket' => $ticket]);
    }

    //Generate a ticket for the chosen event
    public function store(Request $request, Event $event) 
    {
        $user = Auth::user();
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
          'ticket_price' => $event->ticket_price

      ]);


        Ticket::create($ticket); 

        return back()->with('message', 'Ticket generated succesfully!');
    }


}