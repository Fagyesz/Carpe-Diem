@extends('layout') @section('content') @include('partials.hero')
<!-- @include('partials.search') -->
{{-- @include('events') --}}

{{--
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if (count($events) == 0)
    <p>No event found</p>
    @endif @foreach ($events as $event)
    <h1>alma</h1>
    @endforeach
</div>
--}} @foreach ($topThreeEvents as $event)

<div class="wraper" style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-bottom: 10px; ">
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-auto">
        <x-event-card :event="$event" />
    </div>
</div>


@endforeach<div style="display: flex; justify-content: center; align-items: center; margin-top: 20px; margin-bottom: 60px;"></div>
 @include('partials.footer')

 @endsection
