<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    @vite('resources/css/app.css')
</head>

<body>
    <form action="/admin/users" method="POST" class="grid justify-center" enctype="multipart/form-data">
        @csrf
        <div class="font-bold text-3xl text-black ">
            Register
        </div>
        <label for="name" class="text-[#000000]">Name</label>
        <input placeholder="Name" type="text" name="name" id="name"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('name') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required value="{{ old('name') }}">
        </input>
        <label for="email" class="text-[#000000]">Email</label>
        <input placeholder="Email" type="email" name="email" id="email"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('email') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required value="{{ old('email') }}">

        </input>

        <label for="birthdate" class="text-[#000000]">Birth</label>
        <input type="date" name="birthdate" id="birthdate"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" required>



        <label for="phone" class="text-[#000000]">Phone</label>
        <input placeholder="Phone Number" type="text" name="phone" id="phone"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 " value="{{ old('phone') }}"
            required>


        <label for="address" class="text-[#000000]">Address</label>
        <input placeholder="Address" type="text" name="address" id="address"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" value="{{ old('address') }}"
            required>


        <label for="line" class="text-[#000000]">ID Line</label>
        <input placeholder="ID Line" type="text" name="line" id="line"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('line') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required value="{{ old('line') }}">


        <label for="password" class="text-[#000000]">Password</label>
        <input placeholder="Password" type="password" name="password" id="password"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required>

        <label for="image" class="text-[#000000]">Image</label>
        <input placeholder="Image" type="file" name="image" id="image"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('image') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" value="{{ old('image') }}"
            required>

        <div class="flex flex-row mt-2">
            <button class="btn btn-wide w-full bg-[#000000] mt-2">
                <h1>===DAFTARR===</h1>
            </button>
        </div>
        {{-- <div class="flex justify-center mt-3">
            <div class="text-[#646262] text-sm">
                Already have an account?
            </div>
            <a href="/login" class="text-black font-bold text-sm ml-1">Sign in</a>
        </div> --}}
    </form>
</body>

</html>
