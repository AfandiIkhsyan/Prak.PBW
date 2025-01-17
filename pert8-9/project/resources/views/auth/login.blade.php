<x-app-layout title="Login">
    <x-slot name='heading'>
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h1>
    </x-slot>

    <form action="{{ route('login') }}" method="post" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input class="border border-gray-300 px-4 py-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                   type="email" value="{{ old('email') }}" name="email" id="email">
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input class="border border-gray-300 px-4 py-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                   type="password" name="password" id="password">
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Login
            </x-button>
        </div>
    </form>
</x-app-layout>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f7fafc;
    }

    form {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    form:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
</style>
