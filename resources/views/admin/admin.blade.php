<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Admin</title>
</head>

<body>
    <h1>Admin</h1>

    {{-- basic routing --}}
    <ul>
        <li><a href="/admin/users">add user</a></li>
        <li><a href="/admin/hrd">HRD</a></li>
        <li><a href="/admin/bendahara">Bendahara</a></li>
        <li><a href="/admin/it">IT</a></li>
        <li><a href="/dashboard" class="text-red-700 font-bold">dashboard</a></li>
    </ul>
</body>

</html>
