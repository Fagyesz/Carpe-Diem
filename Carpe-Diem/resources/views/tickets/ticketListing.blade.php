@extends('layout')

@section('content')
<div class="flex flex-col min-h-screen bg-center bg-cover"
	style="background-image: url(../images/ticket_listing.webp)">

    <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4 pt-6" >

        @if (count($tickets) == 0)
            <p>
                No tickets found
            </p>
        @endif
        @foreach ($tickets as $ticket)
            
            <x-ticketBase :ticket="$ticket"/>
        @endforeach
    </div>


</div>


@endsection