@extends('layout')

@section('content')
    
    @include('partials.hero')
    <!-- @include('partials.search') -->
   {{-- @include('events') --}}

    {{--<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if (count($events) == 0)
            <p>
                No event found
            </p>
        @endif
        @foreach ($events as $event)
            <h1>alma</h1>
        @endforeach
    </div>  --}}

    @include('partials.footer')

@endsection