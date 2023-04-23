
@extends('layout');

    @section('content')


    <body class="bg-cover bg-center bg-no-repeat" style="background-image: url('images/profile_page.jpg')">
            @if (!auth()->user())
                @include('partials.hero')
            @endif
        <div class="text-center">
            <div class="p-10 max-w-lg mx-auto mt-24 shadow-lg rounded-lg bg-slate-200/50" style="display:inline-block;">
                <div class="mx-6">
                <header class="text-center">
                    <h1 class="italic font-black uppercase" style="margin-bottom: 50"> My profile </h1>
                </header>
                <div class="text-center">
                    <img class="rounded-lg" style="display: block; margin:0 auto; margin-bottom:20" height="50%" width="50%" src="{{ asset("storage/{$user->avatar}") }}">
                    <h2><span class="italic font-bold">Full name: </span>{{$user->name}}</h2>
                    <h2><span class="italic font-bold">Username: </span>{{$user->username}}</h2>
                    <h2><span class="italic font-bold">E-mail: </span>{{$user->email}}</h2>
                </div>
                </div>
            </div>

        <div class="p-10 max-w-lg mx-auto mt-24 shadow-lg rounded-lg bg-slate-200/50" style="display: inline-block">
            <header class="text-center">
                <h1 class="italic font-black uppercase" style="margin-top:30"> My tickets</h1>
            </header> 

        </div>
        </div>


    </div>
            
    @endsection
    </body>