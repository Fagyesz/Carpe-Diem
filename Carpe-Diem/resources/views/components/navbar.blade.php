<div class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        @foreach ($links as $link)
                            <a href="/{{ strtolower($link) }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $link }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                @auth
                    <div class="ml-4">
                        <div class="flex items-center">
                            <span class="text-white text-sm font-medium mr-2">{{ auth()->user()->name }}</span>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                        <a href="{{ route('register') }}" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Register</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
