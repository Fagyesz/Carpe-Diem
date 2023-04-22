<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function showTickets() 
    {
        $user = Auth::user();

        

        return view('tickets.ticketListing', [
            'tickets' => Ticket::all()->where('user_id', $user['id'])

        ]);
    }
}
