
{{-- <div
    class="absolute top-0 left-0 w-full h-full opacity-25 bg-no-repeat bg-center"
    style="background-image: url('images/laravel_logo.png')"
></div>

       <div class="flex justify-start relative h-2">
        <div class="w-40 relative left-10">
            <a href="/"><img src="images/CD-logo2.png" alt=" h-40 "></a>
             
        </div>
        
    </div>
<div class="z-10">

    
    
    <h1 class="text-6xl font-bold uppercase text-black">
        Carpe Diem
    </h1>

    <p class="text-2xl text-black-200 font-bold my-4">
        Find an event for your taste!
    </p>
    <div class="pb-2">

            <a
                href="/register"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                >Click here to Sign Up</a>

    </div>
</div> --}}

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
                    <div class="w-1/2 pl-16">
                        <img src="{{ $randomImage }}" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
          </div>
                    </div>
                </div>
        </section>
    </div>
</section>

