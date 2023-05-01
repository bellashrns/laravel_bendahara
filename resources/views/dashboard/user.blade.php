@extends('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Ultimacrews</title>
</head>

<body>

    @section('sidebar')
    @endsection

    <div class="p-4 xl:ml-80">
        <div class="p-4">
            <div class="flex items-center justify-center rounded mb-4">
                <div id="alert-additional-content-5"
                    class="p-4 border border-gray-300 rounded-lg bg-gradient-to-br from-[#011F39] to-[#629FD4] dark:border-gray-600 dark:bg-gray-800 w-full"
                    role="alert">
                    <div class="flex items-center">
                        <h3 class="text-lg font-medium text-white dark:text-gray-300">Data Ultimacrews</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm text-white dark:text-gray-300">
                        See that cute guy in the studio? Find his bio here ;)
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center rounded mb-4">
                <div class="bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4 mb-4 w-full">
                    <div class="flex items-center justify-center flex-wrap gap-4">
                        @foreach ($users as $user)
                            @if ($user->role == '2')
                                <a href="#"
                                    class="block w-sm-1/5 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <img src="{{ url('/images/profile.jpg') }}" alt="Image"
                                        class="rounded-t-lg h-60 w-60" />
                                    <!-- @if ($user->image)
<img class="rounded-t-lg" src="{{ asset('storage/' . $user->image) }}" alt="">
@endif -->
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $user->name }}</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $user->divisi }}</p>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- <h1>list user</h1>
    <ul>
        @foreach ($users as $user)
<li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->phone }}</li>
            <li>{{ $user->address }}</li>
            <li>{{ $user->line }}</li>
            <li>{{ $user->birthdate }}</li>
            @if ($user->image)
<li><img src="{{ asset('storage/' . $user->image) }}" alt=""></li>
@endif
@endforeach
    </ul> -->
</body>

</html>
