<div class="bg-sky-400 sm:flex-1">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
        <div class="flex sm:flex-1 sm:flex-row items-center justify-between h-full">
            <div class="flex sm:flex-1 items-center">
                <a href="/" class="flex-shrink-0">
                    <img class="h-12 w-10" src="{{asset('images\cd-logo-white2.png')}}" alt="Logo">
                </a>
                <div class="flex sm:flex-1 items-center">
                    <div class="ml-10 items-baseline space-x-4 ">
                        <a href="/" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Main</a>
                        @foreach ($links as $link)
                            <a href="/{{ strtolower($link) }}" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $link }}</a>
                        @endforeach
                        <a href="/events/new_event" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Post event</a>
                    </div>
                </div>
            </div>
            @include('partials.search')
            <div class="flex items-center">
                @auth
                    <div class="ml-4">
                        <div class="flex items-center">
                            <span class="text-white text-sm font-medium mr-2">{{ auth()->user()->name }}</span>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}" class="text-white hover:bg-amber-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                        <a href="{{ route('register') }}" class="inline-block text-white uppercase hover:bg-amber-300 hover:text-white py-2 px-4 rounded-xl mt-2">Register</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
