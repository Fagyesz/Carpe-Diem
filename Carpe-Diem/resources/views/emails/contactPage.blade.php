
@extends('layout')



@section('content')

<body class="bg-no-repeat bg-bottom" style="background-image: url('images/contact_page.jpg'); background-size: cover; background-position: center center">

    <x-card class="p-10 max-w-lg mx-auto mt-24">
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
                        placeholder="Here you can share us your thoughts, idead, or problems with the site... ">
                    </textarea>
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


@endsection
</body>

