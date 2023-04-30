<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Forgot Password</title>
</head>

<body>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif
    @if (session()->has('status'))
        <div class="bg-green-500 text-white p-4">
            {{ session('status') }}
        </div>
    @endif

    <h2>Forgot your password?</h2>
    <p>Please enter your mail to password reset request</p>
    <form action="{{ route('password.email') }}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" class="border-black">
        <br>
        <button type="submit" value="Request Password Reset">Send reset link</button>
    </form>
</body>

</html>
