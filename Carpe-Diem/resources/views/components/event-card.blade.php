@props(['event'])


<x-card>
    <div class="flex pt-2 pl-2">
        <div class="flex-col">
            <a href="/events/{{ $event->id }}">
                <img class="max-w-none object-contain hidden w-60 h-40 mr-2 md:block max-w-xs transition duration-300 ease-in-out hover:scale-110"
            src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
            alt=""/>
            </a>
            
            <div class="text-xl font-bold mb-4 pl-6 pt-4">{{ $event->ticket_price }} €  </div>
        </div>
            
            
 
        <div class="pl-2 ">
            <h3 class="text-2xl">
                <a href="/events/{{ $event->id }}">{{ $event->title }}</a>
            </h3>
            <div class="text-xl mb-4"><i class="fa-regular fa-calendar-days fa-xs"></i> {{ date('Y.m.d.', strtotime($event->start_time)) }} </div>
            <div class="text-m "><i class='fa-solid fa-location-dot'></i> {{ $event->location }} </div>

                    {{-- <x-listing-tags :tagsCsv="$events->tags" /> --}}

        </div>
    </div>
</x-card>
