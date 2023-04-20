@extends('layout')

@section('content')
<div class="flex bg-cover bg-center bg-no-repeat" style="background-image: url('images/single_listing_bg.jpg')">

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
          <div class="flex justify-center py-2 lg:pt-4 pt-8">
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
      <div class="text-center mt-6">
        <h3 class="text-xl font-semibold leading-normal text-blueGray-700 mb-2">
          {{ $user->name }}
        </h3>
        <p>
            ({{ $user->username }})
        </p>
        <div class="text-sm leading-normal mt-0 mb-8">
          {{ $user->gender }}
          @if ($user->gender == null)
          *gender not given
          @endif
        </div>
        
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-envelope mr-2 text-lg text-blueGray-400"></i>
          {{ $user->email }}
          @if ($user->email_verified_at == null)
            <h6>*not verified</h6>
          @endif
        </div>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-cake-candles text-lg text-blueGray-400"></i>
          {{ $user->birthdate }}
          @if ($user->birthdate == null)
            *not given
          @endif
        </div>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-phone text-lg text-blueGray-400"></i>
          {{ $user->phone }}
          @if ($user->phone == null)
            *not given
          @endif
        </div>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
          <i class="fa-solid fa-location-dot text-lg text-blueGray-400"></i>
          @if ($user->country == null && $user->address != null)
             {{ $user->address }}
          @endif
          @if ($user->country != null && $user->address == null)
          {{ $user->country }}
          @endif
          @if ($user->country != null && $user->address != null)
          {{ $user->country }}, {{ $user->address }}
          @endif
          @if ($user->country == null && $user->address == null)
            *not given
          @endif
        </div>
      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center"> 
          <div class="w-full lg:w-9/12 px-4">
            <div class="flex justify-center"><i class="fa-solid fa-book text-lg text-blueGray-400"></i></div>
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
              {{ $user->bio }}
              @if ($user->bio == null)
              *not given
              @endif
            </p>
          </div>
        </div>
        <div><a href="/profile/edit"><i class="fa-solid fa-pen-to-square text-3xl max-w-xs transition duration-300 ease-in-out hover:scale-125"></i>
            </a>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>



@endsection