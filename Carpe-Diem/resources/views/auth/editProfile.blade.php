@extends('layout')

@section('content')
<div class="flex bg-cover bg-center bg-no-repeat" style="background-image: url( '../images/single_listing_bg.jpg')">
    <div class="w-full lg:w-4/12 px-4 mx-auto pt-6">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16 opacity-90">
            <div class="flex px-16 py-8 ">
                <form method="POST" action="/profile/edit" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-center text-center text-2xl font-bold mb-8 pl-4">Edit your personal datas</div>
                    <div class="mb-6 pl-4">
                        <label for="username" class="inline-block text-lg mb-2">Username:</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="username"
                            value="{{ $user->username }}" />
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="name" class="inline-block text-lg mb-2">Name:</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                            value="{{ $user->name }}" />
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="email" class="inline-block text-lg mb-2">Email:</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                            value="{{ $user->email }}" />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="birthdate" class="inline-block text-lg mb-2">Birthdate:</label>
                        <input type="date-local" class="border border-gray-200 rounded p-2 w-full" name="birthdate"
                            value="{{ $user->birthdate }}" />
                        @error('birthdate')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="Phone" class="inline-block text-lg mb-2">Phone:</label>
                        <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="Phone"
                            value="{{ $user->phone }}" />
                        @error('Phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="country" class="inline-block text-lg mb-2">Country:</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="country"
                            value="{{ $user->country }}" />
                        @error('country')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="address" class="inline-block text-lg mb-2">Address:</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address"
                            value="{{ $user->address }}" />
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="bio" class="inline-block text-lg mb-2">Bio:</label>
                        <textarea type="text" class="border border-gray-200 rounded p-2 w-full resize-none" name="bio" rows="10" >{{ $user->bio }}</textarea>
                        @error('bio')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pt-6 pl-4 flex justify-center">
                        <div class="flex pr-4"><a href="/profile"> <i class="fa-solid fa-backward text-3xl max-w-xs transition duration-300 ease-in-out hover:scale-125"></i></a></div>
                        <button class="bg-laravel text-black rounded py-2 px-4 hover:bg-black text-white ">
                            Edit profile 
                        </button>
                    </div>
                </form>
            </div>
      </div>
    </div>
</div>
@endsection