<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Reset Passowrd</title>
</head>

<body>
    <div>
        <div>
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
            @endif
            @if (session()->has('status'))
                <div class="bg-green-500 text-white p-4">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ request()->token }}">
                <input type="hidden" name="email" value="{{ request()->email }}">
                <label for="password">Password</label>
                <input type="password" name="password" class="border-black">
                <br>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border-black">
                <br>
                <button type="submit" value="Update Password">Reset Password</button>
            </form>
        </div>
    </div>
</body>

</html>
