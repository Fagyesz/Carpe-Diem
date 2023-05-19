@extends('layout')

@section('content')
<div class="flex bg-cover bg-no-repeat bg-center h-screen font-sans justify-center" style="background-image: url('images/login_register_page.jpg'); font-family: Roboto">

    <div class="sm:shrink items-center mt-2" style="margin: 0 auto;">
        <div class="sm:shrink w-full max-w-md">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="bg-orange-100 shadow-lg rounded px-8 pt-6 pb-8 mb-4 text-center">
                @csrf
                <h2 class="text-center text-2xl font-black mb-6">Create Account</h2>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="name">
                        Full Name
                    </label>
                    <input
                        class="appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                    >
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="name">
                        Nickname
                    </label>
                    <input
                        class="appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username"
                        type="text"
                        name="username"
                        value="{{ old('username') }}"
                        required
                        autofocus
                    >
                    @error('username')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <input
                        class="appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        type="password"
                        name="password"
                        required
                    >
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input
                        class="appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="avatar">
                        Avatar
                    </label>
                    <h6 class="pb-2">*Optional</h6>
                    <input
                        class="appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="avatar"
                        type="file"
                        name="avatar"
                    >
                    @error('avatar')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col sm:flex-row items-center justify-between">
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4 sm:mb-0"
                        type="submit"
                    >
                        Register
                    </button>
                    <a
                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="{{ route('login') }}"
                    >
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
