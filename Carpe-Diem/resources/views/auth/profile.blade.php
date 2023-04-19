@extends('layout')

@section('content')
<div class="flex bg-cover bg-center bg-no-repeat" style="background-image: url('images/single_listing_bg.jpg')">


<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="w-full lg:w-4/12 px-4 mx-auto pt-6">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16 opacity-90">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
            <div class="relative">
                <img alt="" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('/images/avatar_placeholder.png') }}" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
              </div>
        </div>
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                {{ $listedEvents}}
              </span>
              <span class="text-sm text-blueGray-400">Your Events</span>
            </div>
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                22 {{-- ide majd kell egy sold ticket count --}}
              </span>
              <span class="text-sm text-blueGray-400">Sold</span>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                115 {{-- ide majd kell egy bought ticket count --}}
              </span>
              <span class="text-sm text-blueGray-400">Bought</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
          {{ $user->name }}
        </h3>
        <p class="mb-6">
            ({{ $user->username }})
        </p>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
          <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
          Los Angeles, California
        </div>
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Solution Manager - Creative Tim Officer
        </div>
        <div class="mb-2 text-blueGray-600">
          <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
          University of Computer Science
        </div>
      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-9/12 px-4">
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
              An artist of considerable range, Jenna the name taken
              by Melbourne-raised, Brooklyn-based Nick Murphy
              writes, performs and records all of his own music,
              giving it a warm, intimate feel with a solid groove
              structure. An artist of considerable range.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



@endsection