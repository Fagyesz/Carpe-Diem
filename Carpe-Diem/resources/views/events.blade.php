@extends('layout')

@section('content')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@unless(count($events) == 0)

@foreach ($events as $event)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/no_image.png"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href=""> {{-- {{ $event->title }} --}} Event title </a>
            </h3>
            <div class="text-xl font-bold mb-4">Something Corp</div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Eger
                
            </div>
        </div>
    </div>
</div>
@endforeach

@else
<p>No events found</p>
@endunless

</div>

@endsection




