@props(['event'])


<x-card>
    <div class="flex">
        <img class=" object-contain hidden w-50  h-40 mr-4 md:block"
            src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
            alt="" />
            
        <div>
            <h3 class="text-2xl">
                <a href="/events/{{ $event->id }}">{{ $event->title }}</a>
            </h3>
            <div class="text-xl mb-4"><i class="fa-regular fa-calendar-days fa-xs"></i> {{ date('Y.m.d.', strtotime($event->start_time)) }} </div>
            <div class="text-m mb-4"><i class='fa-solid fa-location-dot'></i> {{ $event->location }} </div>
            <div class="text-xl font-bold mb-4">{{ $event->ticket_price }} €  </div>
                  

            {{-- <x-listing-tags :tagsCsv="$events->tags" /> --}}

        </div>
    </div>
</x-card>
