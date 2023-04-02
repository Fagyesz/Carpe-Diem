@extends('layout')

@section('content')
    <!-- Import Tailwind CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css">

<!-- Login form -->
<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <form class="bg-gray shadow-lg rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="text-2xl font-medium mb-6">Login</h3>
            <div class="mb-4">
                <label class="block font-bold mb-2" for="username_or_email">
                    Username or Email
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username_or_email"
                    type="text"
                    name="username_or_email"
                    value="{{ old('username_or_email') }}"
                    required
                >
                @error('username_or_email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password"
                    type="password"
                    name="password"
                    required
                >
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <input
                    class="mr-2 leading-tight"
                    type="checkbox"
                    id="remember_me"
                    name="remember"
                    {{ old('remember') ? 'checked' : '' }}
                >
                <label class="font-medium" for="remember_me">
                    Remember me
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Login
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
