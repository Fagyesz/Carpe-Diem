@extends('layout')

@section('content')
<div class="flex bg-cover bg-center bg-no-repeat" style="background-image: url( '../images/single_listing_bg.jpg')">
    <div class="w-full lg:w-4/12 px-4 mx-auto pt-6">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16 opacity-90">
            <div class="flex px-16 py-8 ">
                <form method="POST" action="/profile/edit" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-center text-center text-2xl font-bold mb-16 pl-4">Edit your personal datas</div>
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
                        @error('name')
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
                        <input type="date" class="border border-gray-200 rounded p-2 w-full" name="birthdate"
                            value="{{ $user->birthdate }}" />
                        @error('birthdate')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6 pl-4">
                        <label for="phone" class="inline-block text-lg mb-2">Phone:</label>
                        <input type="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{3}-[0-9]{4}" class="border border-gray-200 rounded p-2 w-full" name="phone"
                            placeholder="Format: 00-11-222-3333" value="{{ $user->phone }}" />
                        @error('phone')
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
                    <div class="py-4 pl-4">
                        <div class="flex items-center mb-4">
                            <input id="male" type="radio" value="Male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @checked($user->gender == "Male")>
                            <label for="male" class="ml-2 text-sm font-medium ">Male</label>
                        </div>
                        <div class="flex items-center">
                            <input id="female" type="radio" value="Female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @checked($user->gender == "Female")>
                            <label for="female" class="ml-2 text-sm font-medium  " @checked($user->gender == "Female")>Female</label>
                        </div>
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