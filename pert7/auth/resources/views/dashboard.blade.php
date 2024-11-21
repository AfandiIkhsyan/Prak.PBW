<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="container">
                    <style>
                        body {
                            background-color: #f4f7f9;
                            font-family: 'Arial', sans-serif;
                        }

                        .container {
                            padding: 30px;
                            background-color: #ffffff;
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            margin-top: 20px;
                            text-align: center;
                        }

                        h2 {
                            color: #4a5568;
                            font-size: 24px;
                            margin-bottom: 20px;
                        }

                        ul {
                            list-style: none;
                            padding: 0;
                        }

                        ul li {
                            margin: 10px 0;
                            padding: 15px 20px;
                            background-color: #e2e8f0;
                            border-radius: 8px;
                            font-size: 18px;
                            display: flex;
                            align-items: center;
                            transition: background-color 0.3s ease;
                        }

                        ul li:hover {
                            background-color: #cbd5e0;
                        }

                        ul li:before {
                            content: '';
                            display: inline-block;
                            width: 25px;
                            height: 25px;
                            margin-right: 15px;
                            background-image: url('https://img.icons8.com/emoji/48/soccer-ball-emoji.png');
                            background-size: contain;
                        }

                        .welcome-message {
                            font-size: 20px;
                            color: #2d3748;
                            margin-bottom: 15px;
                        }

                        .card {
                            background-color: #edf2f7;
                            border-radius: 10px;
                            padding: 15px;
                            margin-top: 20px;
                            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                        }
                    </style>

                    <div class="welcome-message">
                        Selamat datang, {{ Auth::user()->name }}!
                    </div>

                    <h2>Daftar Pemain Bola</h2>
                    <ul>
                        @foreach($players as $player)
                            <li>{{ $player }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
