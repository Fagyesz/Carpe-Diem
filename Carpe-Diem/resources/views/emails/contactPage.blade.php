
@extends('layout')
@section('content')

<div class="flex-1 flex-col min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('images/contact_page.jpg')">

<div class="pt-24">
    <x-card class="p-10 max-w-lg mx-auto">
    <div class="mx-6">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Contact page
            </h2>
            <p class="mb-4">Here you can reach us!</p>
        </header>
        <form method="POST" action="/contact/send">
            <div>
                @csrf
                <div class="mb-6">
                    <label for="message" class="inline-block text-lg mb-2 font-bold">
                        Your message:
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="message" rows="10"
                    placeholder="Here you can share us your thoughts, ideas, or problems with the site... "></textarea>
                    @error('message')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-6 flex justify-center">
                    <button class="bg-laravel text-black rounded py-2 px-4 hover:bg-black text-white ">
                        Send message
                    </button>

                </div>
            </div>
        </form>
    </div>
    </x-card>
</div>

</div>
@endsection


