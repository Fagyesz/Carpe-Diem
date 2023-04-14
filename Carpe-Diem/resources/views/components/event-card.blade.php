@props(['event'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/events/{{ $event->id }}">{{ $event->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $event->price }} €</div>
            {{-- <x-listing-tags :tagsCsv="$events->tags" /> --}}

        </div>
    </div>
</x-card>
