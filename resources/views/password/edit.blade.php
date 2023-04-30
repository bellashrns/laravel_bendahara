<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Change Password</title>
</head>

<body>
    <form action="{{ route('password.edit') }}" method="post">
        @csrf
        <label for="current_password" class="text-[#000000]">current_password</label>
        <input placeholder="current_password" type="password" name="current_password" id="current_password"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('current_password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required>

        <label for="password" class="text-[#000000]">new password</label>
        <input placeholder="password" type="password" name="password" id="password"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required>

        <label for="password_confirmation" class="text-[#000000]">password confirmation</label>
        <input placeholder="password_confirmation" type="password" name="password_confirmation"
            id="password_confirmation"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('password_confirmation') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror"
            required>

        <button type="submit" class="bg-[#FF0000] text-[#FFFFFF] rounded-lg w-72 h-10 p-5">Change Password</button>
    </form>

</body>

</html>
