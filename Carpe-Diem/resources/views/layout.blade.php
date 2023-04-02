<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#efe52d",
                    },
                },
            },
        };
    </script>
    <title>CarpeDiem</title>
</head>
<body>
    <nav class="flex justify-end items-center mb-4 relative top-2">
        <ul class="flex right-12 space-x-6 mr-6 text-lg ">
            <li class="nav-item">
                <a class="nav-link" href="/">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/">Profile</a>
            </li>

        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    
</body>
<footer
            class="fixed bottom-0 left-0 w-full  flex  items-center justify-start font-bold bg-laravel text-white h-20 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
            {{-- @if($admin) --}}
            <a href="/events/new_event" class="absolute top-1/4 right-10 bg-black text-white py-2 px-5">Post a new event</a>
           {{-- @endif --}} 
        </footer>

        <x-flash-message />
</html>