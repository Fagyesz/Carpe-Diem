@extends('layout')

    @section('content')


        <div class="flex-1 flex-col min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/events_page.jpg')">

        @if (!auth()->user())
            @include('partials.hero')
        @endif


        <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4 pt-6">

            @if (count($events) == 0)
                <p>
                    No events found
                </p>
            @endif
            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>

        <div class="mt-6 p-4">
            {{ $events->links() }}
        </div>
    </div>
     <x-footer />
    @endsection
