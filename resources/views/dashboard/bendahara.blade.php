<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Kas</title>
</head>

<body>
    <h1>Kas</h1>
    <form action="/bendahara" method="POST" class="grid justify-center" enctype="multipart/form-data">
        @csrf
        <div class="font-bold text-3xl text-black ">
            Uang Kas
        </div>

        <label for="month" class="text-[#000000]">Month</label>
        <input placeholder="Month" type="text" name="month" id="month"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('month') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required value="{{ old('month') }}">
        </input>

        <label for="type" class="text-[#000000]">Type</label>
        <input placeholder="Type" type="type" name="type" id="type"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('type') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required value="{{ old('type') }}">
        </input>

        <label for="value" class="text-[#000000]">Value</label>
        <input placeholder="Value" type="text" name="value" id="value"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 " 
            value="{{ old('value') }}">

        <label for="notes" class="text-[#000000]">Notes</label>
        <input placeholder="Notes" type="text" name="notes" id="notes"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('notes') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" 
            value="{{ old('notes') }}" required>

        <label for="status" class="text-[#000000]">Status</label>
        <input placeholder="Status" type="text" name="status" id="status"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('status') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" 
            value="{{ old('status') }}" required>

        <label for="image" class="text-[#000000]">Image</label>
        <input placeholder="Image" type="file" name="image" id="image"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('image') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            value="{{ old('image') }}" required>

        <div class="flex flex-row mt-2">
            <button class="btn btn-wide w-full bg-[#000000] mt-2">
                <h1>===DAFTARR===</h1>
            </button>
        </div>
    </form>
</body>

</html>
