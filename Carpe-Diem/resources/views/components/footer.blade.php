
<footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-gray-800 text-white h-20 mt-24 opacity-90 md:justify-center">
    <div class="container mx-auto">
        <div class="flex items-center justify-between ">
            <p class="ml-1 text-white">Copyright &copy; 2023, All Rights reserved</p>
            {{-- @if($admin) --}}
            <a href="/events/new_event" class="bg-black text-white py-2 px-5 rounded-md hover:bg-gray-800 transition-colors duration-200">Post a new event</a>
            {{-- @endif --}}
        </div>
    </div>
</footer>
