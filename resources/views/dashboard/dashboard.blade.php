@extends('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>UMN Radio | Dashboard</title>
</head>

<body>

    @section('sidebar')
    @endsection

    <div class="p-4 xl:ml-80">
        <div class="p-4">
            <div>
                <h1 class="mb-4">Hello, {{ auth()->user()->name }}!</h1>
            </div>
            @if (auth()->user()->role == 2)
                <div class="flex items-center justify-center rounded mb-4">
                    <div id="alert-additional-content-5"
                        class="p-4 border border-gray-300 rounded-lg bg-gradient-to-r from-[#011F39] to-[#629FD4] dark:border-gray-600 dark:bg-gray-800 w-full"
                        role="alert">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2 text-white dark:text-gray-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-medium text-white dark:text-gray-300">Reminder</h3>
                        </div>
                        <div class="mt-2 mb-4 text-sm text-white dark:text-gray-300">
                            Halo, Ultimacrews! Jangan lupa untuk datang di Rapat Pleno April pada 3 Mei 2023 pukul 18.30
                            WIB di Lecture Hall!
                            <br /><small> &ensp;- BPH UMN Radio Gen XII </small>
                        </div>
                    </div>
                </div>
            @endif
            <div class="grid grid-cols-none md:grid-cols-2 gap-4 mb-6">
                <div
                    class="flex flex-col items-center justify-center bg-clip-border rounded-xl bg-white text-gray-700 shadow-md h-80 p-6">
                    <p class="font-bold text-center text-2xl text-gray-500">Inspiring Change for Tomorrow</p>
                    <p class="mt-2 text-center text-gray-500">Be a Changer, Make it Better!</p>
                </div>
                <form action="{{ route('dashboard') }}" method="post">
                    <div
                        class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md h-80 p-4 gap-4">
                        <div class="">
                            <h2>Change Password</h2>
                        </div>

                        @csrf
                        <div class="relative w-full min-w-[200px] h-11">
                            <input for="current_password" name="current_password" type="password" id="current_password"
                                placeholder="Old Password"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11">
                            <input for="password" name="password" type="password" id="password"
                                placeholder="New Password"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11">
                            <input for="password_confirmation" name="password_confirmation" type="password"
                                id="password_confirmation" placeholder="Confirm New Password"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mb-3">
                            <button type="submit"
                                class="bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                                Change Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @if (auth()->user()->role == 2)
                <div class="bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4 mb-4 w-full">
                    <div
                        class="relative bg-clip-border mx-4 rounded-xl overflow-hidden shadow-lg -mt-6 mb-4 grid h-24 place-items-center bg-gradient-to-r from-[#011F39] to-[#629FD4]">
                        <h3 class="block antialiased tracking-normal leading-snug text-lg font-medium text-white">Inbox
                        </h3>
                    </div>
                    <div class="flex flex-col gap-4">
                        <a href="#"
                            class="block w-fullm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">From : Anonymous</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Good job!</p>
                        </a>
                        <a href="#"
                            class="block w-fullm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">From : Bella Saharani
                                Sopyan</>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Hai, jangan lupa bayar kas ya...
                                </p>
                        </a>
                        <a href="#"
                            class="block w-fullm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">From : IT & Software
                                Development Gen XII</>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Halo! Semoga website ini
                                    bermanfaat buat kamu ya. Kalau ada bug atau error silakan langsung kontak kami.
                                    Terima kasih!</p>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</body>

</html>
