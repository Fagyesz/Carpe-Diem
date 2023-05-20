@extends('layout')

@section('content')

<div class="bg-scroll justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: {{ url('/images/single_listing_bg.jpg') }}">
    <div class="flex flex-1  mx-6 max-w-md w-full mt-2 place-content-center" style="margin: 0 auto;">
        <x-card class="p-5 flex-row shrink">
            <div class="mx-20 flex flex-col text-xs justify-center text-start">
                <img class="w-80 mr-6"
                    src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
                    alt="" />

                <h3 class=" flex justify-center pb-8 text-2xl font-bold mb-2">{{ $event->title }}</h3>
                <div class="text-xl mb-4"> <i class='fa-solid fa-location-dot'></i> Location: {{ $event->location }}
                </div>
                <div class="text-xl mb-4">
                    <h3><i class="fa-solid fa-person"></i>Organizer: {{ $organizer[0] }} </h3>
                </div>
                <div class="text-xl mb-4"><i class="fa-solid fa-hourglass-start"></i> Starting time: {{
                    Carbon\Carbon::parse($event->start_time)->format('Y.m.d h:m')}} </div>
                <div class="text-xl mb-4"> <i class="fa-solid fa-flag-checkered"></i> Ending time: {{
                    Carbon\Carbon::parse($event->end_time)->format('Y.m.d h:m') }} </div>
                <div class="text-xl mb-4"> <i class="fa-solid fa-clock"></i> Duration: {{ $totalDuration}} </div>

                <div class=" text-xl mb-4 flex pb-4 ">
                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity" class=" mx-3 px-8" form="buy">
                        @for ($i = 0; $i < $event->tickets_available; $i++)
                            <option value="{{ $i+1 }}">{{ $i+1 }}</option>
                            @endfor
                    </select>
                </div>

                @if ($event->tickets_available != 0)
                <div class="text-xl mb-4 font-bold text-green-600 text-center"> Available </div>
                @else
                <div class="text-xl mb-4 font-bold text-red-600 text-center"> Unavailable </div>
                @endif


                <div class="flex justify-center text-xl font-bold mb-4">Ticket price: {{ $event->ticket_price }} €</div>
                <div class="flex justify-center text-lg space-y-6 pb-8">
                    <form method="POST" action="/events/{{ $event->id }}/buy_ticket" id="buy">
                        @csrf
                        <button>
                            <a target="buy" class=" block bg-black text-white py-3 px-2 rounded-xl hover:opacity-80">
                                <i class="fa fa-cart-plus" aria-hidden="true">
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
                    <p>{{ $event->description }}
                    <p>
                </div>

            </div>
            <div>
                <style>
                    #social-links ul li {
                        display: inline-block;
                        padding-inline: 1rem;
                    }
                </style>
                <div class="flex justify-center pb-8 text-4xl font-bold pt-6">
                    {!! $shareButtons !!}
                </div>

            </div>
        </x-card>
        @if (auth()->user()->id == $event['organizer_id'])


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
        @endif
    </div>
</div>
@endsection