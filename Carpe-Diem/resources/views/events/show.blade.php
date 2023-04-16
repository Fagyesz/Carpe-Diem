@extends('layout')

@section('content')
<body class="bg-scroll" style="background-image:url({{ url('images/single_listing_bg.jpg') }}); background-size: cover; background-position: center center">
    <div class="mx-6" style="margin-left: 30rem; margin-right: 30rem; margin-top: 5%; ">
        <x-card class="p-5">
            <div class="mx-20 flex flex-col justify-items-start text-start">
                <img class="hidden w-80 mr-6 md:block"
            src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
            alt="" />

                <h3 class=" flex justify-center pb-8 text-2xl font-bold mb-2">{{ $event->title }}</h3>
                <div class="text-xl mb-4"> <i class='fa-solid fa-location-dot'></i> Location: {{ $event->location }} </div>
                <div class="text-xl mb-4"><h3><i class="fa-solid fa-person"></i>Organizer: {{ $organizer[0] }} </h3></div>
                <div class="text-xl mb-4"><i class="fa-solid fa-hourglass-start"></i> Starting time: {{ Carbon\Carbon::parse($event->start_time)->format('Y.m.d h:m')}} </div>
                <div class="text-xl mb-4"> <i class="fa-solid fa-flag-checkered"></i> Ending time: {{ Carbon\Carbon::parse($event->end_time)->format('Y.m.d h:m') }} </div>
                <div class="text-xl mb-4"> <i class="fa-solid fa-clock"></i> Duration: {{ $totalDuration}} </div>



                <div class="flex justify-center text-xl font-bold mb-4">Ticket price: {{ $event->ticket_price }} €</div>
                <div class="flex justify-center text-lg space-y-6 pb-8">
                    @csrf
                    @method('POST')
                        <input type="hidden" value="{{ $event }}" name="id">
                        <button>
                            <a target="_blank"
                               class=" block bg-black text-white py-3 px-2 rounded-xl hover:opacity-80">
                                <i class="fa fa-cart-plus"
                                   aria-hidden="true">
                                </i>
                                Buy ticket
                            </a>
                        </button>
                </form>
            </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                    <h3 class="flex justify-center text-3xl font-bold mb-4">
                        Description 
                    </h3>
                <div class="text-xl mb-4">
                    <p>{{ $event->description }}<p>
                </div>

            </div>
            <div>
                <style>
                    #social-links ul li {
                        display:inline-block;
                        padding-inline: 1rem;
                    }
                </style>
                <div class="flex justify-center pb-8 text-4xl font-bold pt-6">
                    {!! $shareButtons !!}
                </div>
                
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a class="flex justify-start" href="/events/{{ $event->id }}/edit">
                <i class="fa-solid fa-pencil"></i>Edit
            </a>

            <form method="POST" action="/events/{{ $event->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i>Delete
                </button>
            </form>
        </x-card>
    </div>
</body>
@endsection
