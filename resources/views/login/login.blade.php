<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UMN Radio | Login</title>
</head>

<body>
    <form action="/" method="POST">
        @csrf
        <div class="mt-5">
            <input name="email" type="email" placeholder="Email" class="border-1">
        </div>
        <div class="mt-5">
            <input name="password" type="password" placeholder="Password" class="border-1">
        </div>
        <p class="text-red-800 font-bold"><a href="{{ route('password.request') }}">forgot password?</a></p>

        <div class="mt-5">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Login
            </button>
    </form>
</body>

</html>
