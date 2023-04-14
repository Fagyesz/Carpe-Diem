@extends('layout')

@section('content')
    @include('partials.hero')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if (count($events) == 0)
            <p>
                No events found
            </p>
        @endif
        @foreach ($events as $event)
            <x-event-card :event="$event" />
        @endforeach
    </div>

{{--     <div class="mt-6 p-4">
        {{ $event->links() }}
    </div> --}}
@endsection