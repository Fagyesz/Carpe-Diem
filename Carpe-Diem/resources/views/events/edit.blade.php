@extends('layout')

@section('content')

<body class="bg-scroll"
    style="background-image:url({{ url('images/single_listing_bg.jpg') }}); background-size: cover; background-position: center center">

    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit: {{ $event->title }}
            </h2>
            <p class="mb-4">Edit the current event</p>
        </header>
        <div class="p-4">
            <form method="POST" action="/events/{{ $event->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        value="{{ $event->title }}" placeholder="Example: XY Concert" />
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        value="{{ $event->location }}" placeholder="Example: Eger, XY Sörkert" />
                    @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div class="mb-6">
                    <label for="organizer" class="inline-block text-lg mb-2">Organizer</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="organizer"
                        value="{{ $event->organizer }}" placeholder="" />
                    @error('organizer')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div> --}}


                <div class="mb-6">
                    <label for="ticket_price" class="inline-block text-lg mb-2">Ticket price</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="ticket_price"
                        value="{{ $event->ticket_price }}" placeholder="€" />
                    @error('ticket_price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tickets_available" class="inline-block text-lg mb-2">Tickets quantity</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tickets_available"
                        value="{{ $event->tickets_available }}" placeholder="" />
                    @error('tickets_available')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="event_image" class="inline-block text-lg mb-2">
                        Image
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="event_image" />

                    <img class="hidden w-80 mr-6 md:block"
                        src="{{ $event->event_image ? asset('storage/' . $event->event_image) : asset('/images/no_image.jpg') }}"
                        alt="" />

                    @error('event_image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Event schedule...">{{ $event->description }}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="start_time" class="inline-block text-lg mb-2">Starting time</label>
                    <input type="datetime-local" class="border border-gray-200 rounded p-2 w-full" name="start_time"
                        value="{{ $event->start_time }}" placeholder="" />
                    @error('start_time')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="start_time" class="inline-block text-lg mb-2">Ending time</label>
                    <input type="datetime-local" class="border border-gray-200 rounded p-2 w-full" name="end_time"
                        value="{{ $event->end_time }}" placeholder="" />
                    @error('end_time')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>



                <div class="mb-6 flex justify-center">
                    <a href="/events/{{ $event->id }}"> <i
                            class="fa-solid fa-backward pr-4 text-3xl max-w-xs transition duration-300 ease-in-out hover:scale-125"></i></a>
                    <button class="bg-laravel text-black rounded py-2 px-4 hover:bg-black text-white ">
                        Edit the event
                    </button>
                </div>
            </form>
        </div>
        </div>
    </x-card>
</body>
@endsection