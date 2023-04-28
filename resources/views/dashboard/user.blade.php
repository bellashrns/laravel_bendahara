<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Anggota</title>
</head>

<body>
    <h1>list user</h1>
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
    </ul>
</body>

</html>
