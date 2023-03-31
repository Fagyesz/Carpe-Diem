<section
class="relative h-72 bg-yellow-300 flex flex-col justify-center align-center text-center space-y-3 mb-3"
>
<div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/laravel_logo.png')"
></div>
{{--  @php
            $admin = \App\Http\Controllers\AdminController::check(\Illuminate\Support\Facades\Auth::id());
        @endphp --}}
       <div class="flex justify-start relative h-2">
        <div class="w-11 relative left-10">
            <a href="/"><img src="images/calendar_logo.png" alt=" h-12 "></a>
             
        </div>
        
    </div>
<div class="z-10">
    
   {{-- @if($admin)
    <h1 class="text-6xl font-bold uppercase text-white">
        Event<span class="text-black">Welcome Admin!</span>
    </h1> 
    @else--}} 
    
    
    <h1 class="text-6xl font-bold uppercase text-black">
        CarpeDiem
    </h1>
    {{-- @endif --}}
    <p class="text-2xl text-black-200 font-bold my-4">
        Find an event for your taste!
    </p>
    <div>
       {{-- @guest --}} 
            <a
                href="{{-- {{ route('register') }} --}}/  "
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                >Click here to Sign Up</a>
            
        {{-- @endguest --}}
    </div>
</div>
</section>
