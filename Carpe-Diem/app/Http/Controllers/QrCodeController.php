<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index(Ticket $ticket)
    {
      return view('tickets.ticket', ['ticket' => $ticket]);
    }
}