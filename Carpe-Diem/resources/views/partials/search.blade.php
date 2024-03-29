<form action="/events" class="hidden sm:block">
    <div class="relative m-4 rounded-lg bg-yellow-300 hidden sm:block">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none bg-yellow-200"
            placeholder="Search events..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-sky-900 hover:bg-cyan-600"
            >
                Search
            </button>
        </div>
    </div>
</form>