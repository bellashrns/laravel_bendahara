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

<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="logo-sidebar"
        class="bg-gradient-to-br from-[#011F39] to-[#629FD4] -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto">
            <a href="https://radio.umn.ac.id/" class="flex items-center pl-2.5 mb-5">
                <img src="{{ url('/images/logoRadio-putih.png') }}" class="p-4 h-18 sm:h-18" alt="Flowbite Logo" />
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/dashboard" class="flex items-center p-3 rounded-lg text-white hover:bg-white/10">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 transition duration-75 text-white group-hover:text-white"
                            fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.854,16.548C30.523,17.43,29.703,18,28.764,18H28v11c0,0.552-0.448,1-1,1h-6v-7c0-2.757-2.243-5-5-5  s-5,2.243-5,5v7H5c-0.552,0-1-0.448-1-1V18H3.235c-0.939,0-1.759-0.569-2.09-1.451c-0.331-0.882-0.088-1.852,0.62-2.47L13.444,3.019  c1.434-1.357,3.679-1.357,5.112,0l11.707,11.086C30.941,14.696,31.185,15.666,30.854,16.548z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/user" class="flex items-center p-3  rounded-lg text-white hover:bg-white/10">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 1C8.96243 1 6.5 3.46243 6.5 6.5C6.5 9.53757 8.96243 12 12 12C15.0376 12 17.5 9.53757 17.5 6.5C17.5 3.46243 15.0376 1 12 1Z">
                            </path>
                            <path
                                d="M7 14C4.23858 14 2 16.2386 2 19V22C2 22.5523 2.44772 23 3 23H21C21.5523 23 22 22.5523 22 22V19C22 16.2386 19.7614 14 17 14H7Z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-4 whitespace-nowrap">Data Ultimacrews</span>
                    </a>
                </li>
                @if (auth()->user()->role != '1')
                @if (auth()->user()->role != '4')
                    <li>
                        <a href="/bendahara" class="flex items-center p-3  rounded-lg text-white hover:bg-white/10">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16,4H4A2,2,0,0,0,2,6v8a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V6A2,2,0,0,0,16,4Zm-6,8a2,2,0,1,1,2-2A2,2,0,0,1,10,12Zm12-2v8a2,2,0,0,1-2,2H8a2,2,0,0,1-2-2V17H16a3,3,0,0,0,3-3V8h1A2,2,0,0,1,22,10Z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-4 whitespace-nowrap">Uang Kas</span>
                        </a>
                    </li>
                @endif
                @endif
                @if (auth()->user()->role == '1')
                    <li>
                        <a href="/admin" class="flex items-center p-3 rounded-lg text-white hover:bg-white/10">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1556.611 1920c-54.084 0-108.168-20.692-149.333-61.857L740.095 1190.96c-198.162 41.712-406.725-19.269-550.475-163.019C14.449 852.771-35.256 582.788 65.796 356.27l32.406-72.696 390.194 390.193c24.414 24.305 64.266 24.305 88.68 0l110.687-110.686c11.824-11.934 18.283-27.59 18.283-44.34 0-16.751-6.46-32.516-18.283-44.34L297.569 84.207 370.265 51.8C596.893-49.252 866.875.453 1041.937 175.515c155.026 155.136 212.833 385.157 151.851 594.815l650.651 650.651c39.961 39.852 61.967 92.95 61.967 149.443 0 56.383-22.006 109.482-61.967 149.334l-138.275 138.385c-41.275 41.165-95.36 61.857-149.553 61.857Z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-4 whitespace-nowrap">Admin</span>
                        </a>
                    </li>
                @endif
            </ul>
            <div class="mt-2 gap-y-1 font-medium items-end justify-end">
                <a href="/logout" class="flex items-center p-3 rounded-lg text-black/80 bg-white hover:bg-white/50">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-black/80 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.49,3.84l-6-1.5A2,2,0,0,0,12,4.28V5H10A2,2,0,0,0,8,7V8a1,1,0,0,0,2,0V7h2V17H10V16a1,1,0,0,0-2,0v1a2,2,0,0,0,2,2h2v.72a2,2,0,0,0,.77,1.57,2,2,0,0,0,1.23.43,2.12,2.12,0,0,0,.49-.06l6-1.5A2,2,0,0,0,22,18.22V5.78A2,2,0,0,0,20.49,3.84Z">
                        </path>
                        <path
                            d="M4.41,13H9a1,1,0,0,0,0-2H4.41l1.3-1.29A1,1,0,0,0,4.29,8.29l-3,3h0a1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33h0l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-4 whitespace-nowrap">Log Out</span>
                </a>
            </div>
        </div>
    </aside>

    <div class="p-4 xl:ml-80">
        <div class="bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4 mb-4 mt-2 w-full">
            <div class="relative bg-clip-border mx-4 rounded-xl overflow-hidden shadow-lg -mt-6 mb-4 grid h-24 place-items-center bg-gradient-to-r from-[#011F39] to-[#629FD4]">
                <h3 class="block antialiased tracking-normal leading-snug text-2xl font-medium text-white">Profile</h3>
            </div>
            <div class="md:flex items-center gap-4 p-4">
                <img src="{{ asset('storage/' . $penerima->image) }}" alt="" class="rounded-lg h-56 w-56">
                <div class="flex flex-col text-left ml-2">
                    <h1>{{ $penerima->name }}</h1>
                    <p class="text-gray-500 font-semibold">{{ $penerima->divisi }}</p>
                </div>
            </div>
            <div class="p-4">
                <h3>Profile Information</h3>
                <p class="mt-4 text-gray-500 font-semibold">Personal Information</p>
            </div>
            <div class="grid md:grid-cols-2 px-8">
                <div class="grid grid-cols-2">
                    <p class="font-bold">Fullname</p>
                    <p>{{ $penerima->name }}</p>
                    <p class="font-bold">NIM</p>
                    <p>{{ $penerima->nim }}</p>
                    <p class="font-bold">Address</p>
                    <p>{{ $penerima->address }}</p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="font-bold">Date of Birth</p>
                    <p>{{ $penerima->birthdate }}</p>
                    <p class="font-bold">Angkatan</p>
                    <p>{{ $penerima->angkatan}}</p>
                </div>
            </div>
            <div class="p-4">
                <p class="mt-4 text-gray-500 font-semibold">Contact Information</p>
            </div>
            <div class="grid md:grid-cols-2 px-8">
                <div class="grid grid-cols-2">
                    <p class="font-bold">Phone Number</p>
                    <p>{{ $penerima->notelp }}</p>
                    <p class="font-bold">Line ID</p>
                    <p>{{ $penerima->line }}</p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="font-bold">Instagram</p>
                    <p>{{ $penerima->instagram }}</p>
                    <p class="font-bold">Email</p>
                    <p>{{ $penerima->email }}</p>
                </div>
            </div>
            <div class="p-4 mt-2">
                <h3>Evaluation Form</h3>
                <p>Send your evaluation or appreciation to {{ $penerima->name }} here:</p>
            </div>
            <form action="/evaluation" method="POST" class="w-full px-4">
                @csrf
                <input id="receiver" name="receiver" type="hidden" value="{{ $penerima->name }}">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room for Improvement</label>
                <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                <input name="status" id="status" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="status" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Send as Anonymous</label>
                @if (session()->has('message'))
                <button type="button" class="mt-2 bg-green-500 hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                Submitted
                @else    
                <button type="submit" class="mt-2 bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                Send
                @endif
                </button>
            </form>
        </div>
    </div>

</body>

</html>