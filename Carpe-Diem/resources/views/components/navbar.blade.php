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
        </div>
    </div>
</div>
