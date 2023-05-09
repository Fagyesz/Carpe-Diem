@extends('layout')

@section('content')
<div class="bg-fixed min-h-screen bg-center bg-cover" style="background-image: url(../images/main_bg.jpg)">


        @include('partials.hero')
@if (!$isEmpty)
  

    <div class="antialiased w-full h-full bg-black opacity-90 text-gray-400 font-inter p-10">
        <div class="container px-4 mx-auto">
          <div>
            <div id="title" class="text-center my-10">
              <h1 class="font-bold text-4xl text-white">Hot events</h1>
              <p class="text-light text-gray-500 text-xl">
                Here are the most popular evenets, that awaits you!
              </p>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-10 pt-10"
            >
              <div
                id="plan"
                class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in"
              >
                <div id="title" class="w-full py-5 border-b border-gray-800">
                  <h2 class="font-bold text-3xl text-white">{{ $number1->title }}</h2>
                  <h3 class="font-normal text-indigo-500 text-xl mt-2">
                    ${{ $number1->ticket_price }}
                  </h3>
                </div>
                <div id="content" class="">
                  <div id="icon" class="my-5">
                    <div class="flex flex-row justify-center">
                      @if ($number1->event_image == null)
                        <img src="../images/CD-logo2.png" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
                      @else
                        <img src="{{'storage/' .$number1->event_image }}" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
                      @endif
                    </div>
                    <p class="text-gray-500 text-sm pt-2">
                      {{ $number1->tickets_available }} ticket left!
                    </p>
                  </div>
                  <div id="contain" class="leading-8 mb-10 text-lg font-light">
                    <ul>
                      <li>{{ $number1->location }}</li>
                      <li class="pt-2">{{ \Carbon\Carbon::parse($number1->start_time)->format('Y.m.d')}}</li>
                      <li>-</li>
                      <li>{{ \Carbon\Carbon::parse($number1->end_time)->format('Y.m.d') }}</li>
                    </ul>
                    <div id="choose" class="w-full mt-10 px-6">
                      <a
                        href="events/{{ $number1->id }}"
                        class="w-full block bg-gray-900 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-indigo-600 hover:text-white"
                        >Check out!</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="plan"
                class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in"
              >
                <div id="title" class="w-full py-5 border-b border-gray-800">
                  <h2 class="font-bold text-3xl text-white">{{ $number2->title }}</h2>
                  <h3 class="font-normal text-indigo-500 text-xl mt-2">
                    ${{ $number2->ticket_price }}
                  </h3>
                </div>
                <div id="content" class="">
                  <div id="icon" class="my-5">
                    <div class="flex flex-row justify-center">
                      @if ($number2->event_image == null)
                      <img src="../images/CD-logo2.png" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
                    @else
                      <img src="{{'storage/' .$number2->event_image }}" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
                    @endif
                    </div>
                    <p class="text-gray-500 text-sm pt-2">
                      {{ $number2->tickets_available }} ticket left!
                    </p>
                  </div>
                  <div id="contain" class="leading-8 mb-10 text-lg font-light">
                    <ul>
                      <li>{{ $number2->location }}</li>
                      <li class="pt-2">{{ \Carbon\Carbon::parse($number2->start_time)->format('Y.m.d')}}</li>
                      <li>-</li>
                      <li>{{ \Carbon\Carbon::parse($number2->end_time)->format('Y.m.d') }}</li>
                    </ul>
                    <div id="choose" class="w-full mt-10 px-6">
                      <a
                        href="events/{{ $number2->id }}"
                        class="w-full block bg-gray-900 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-indigo-600 hover:text-white"
                        >Check out!</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="plan"
                class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in"
              >
                <div id="title" class="w-full py-5 border-b border-gray-800">
                  <h2 class="font-bold text-3xl text-white">{{ $number3->title }}</h2>
                  <h3 class="font-normal text-indigo-500 text-xl mt-2">
                    ${{ $number3->ticket_price }}
                  </h3>
                </div>
                <div id="content" class="">
                  <div id="icon" class="my-5">
                    <div class="flex flex-row justify-center">
                      @if ($number3->event_image == null)
                      <img src="../images/CD-logo2.png" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
                    @else
                      <img src="{{'storage/' .$number3->event_image }}" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
                    @endif
                    </div>
                    <p class="text-gray-500 text-sm pt-2">
                      {{ $number3->tickets_available }} ticket left!
                    </p>
                  </div>
                  <div id="contain" class="leading-8 mb-10 text-lg font-light">
                    <ul >
                      <li>{{ $number3->location }}</li>
                      <li class="pt-2">{{ \Carbon\Carbon::parse($number3->start_time)->format('Y.m.d')}}</li>
                      <li>-</li>
                      <li>{{ \Carbon\Carbon::parse($number3->end_time)->format('Y.m.d') }}</li>
                    </ul>
                    <div id="choose" class="w-full mt-10 px-6">
                      <a
                        href="events/{{ $number3->id }}"
                        class="w-full block bg-gray-900 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-indigo-600 hover:text-white"
                        >Check out!</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
@endif

        @include('partials.footer')
 

</div>
@endsection