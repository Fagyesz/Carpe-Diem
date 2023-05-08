<section>
    <div class="h-screen bg-black flex items-center">
        <section class="bg-cover bg-center py-32 w-full" style="background-image: url('images/hero.jpg');">
            <div class="container mx-auto text-left text-white">
                <div class="flex items-center">
                    <div class="w-1/2 pl-8">
                        <h1 class="text-5xl font-medium mb-6 ">Welcome to Carpe Diem</h1>
                        <p class="text-xl mb-12 ">Find the best events here!</p>
                        
                            @if (auth()->user())
                            <a href="/events" class="bg-indigo-500 text-white py-4 px-12 rounded-full hover:bg-indigo-600">
                                Browse Events
                            @else
                            <a href="/register" class="bg-indigo-500 text-white py-4 px-12 rounded-full hover:bg-indigo-600">
                                Sign up
                            @endif</a>
                    </div>
                    <div class="flex flex-row justify-end w-1/2  pr-4">
                        <img src="{{ $randomImage }}" class="h-64 w-1/2  object-cover rounded-xl " alt="Layout Image">
          </div>
                    </div>
                </div>
        </section>
    </div>
</section>

