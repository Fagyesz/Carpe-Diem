@props(['event'])


<x-card>
    <div class="flex pt-2 pl-2">
        <div class="flex-col">
            <a href="/events/{{ $event->id }}">
                <img class="max-w-none object-contain hidden w-60 h-40 mr-2 md:block max-w-xs transition duration-300 ease-in-out hover:scale-110"
            src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
            alt=""/>
            </a>
            <div class="flex flex-row pt-2 pl-2">
                <div class="text-xl font-bold">{{ $event->ticket_price }} € </div>
                @if ($event->tickets_available > 0)
                    <div class="text-xl font-bold text-center text-green-600 pl-8">Available</div>
                @else
                    <div class="text-xl font-bold text-center text-red-600 pl-8">Unavailable</div>
                @endif 
            </div>
        </div>
        <div class="flex flex-col ">
            <h3 class="text-2xl font-bold">
                <a href="/events/{{ $event->id }}">{{ $event->title }}</a>
            </h3>
            <div class="text-xl mb-4"><i class="fa-regular fa-calendar-days fa-xs"></i> {{ date('Y.m.d.', strtotime($event->start_time)) }} </div>
            <div class="text-m "><i class='fa-solid fa-location-dot'></i> {{ $event->location }} </div>
                    {{-- <x-listing-tags :tagsCsv="$events->tags" /> --}}

        </div>
    </div>
</x-card>
