<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | HRD</title>
</head>

<body>
    @if (auth()->user()->role != '4')
        <script>
            window.location = "/admin";
        </script>
    @endif
    <h1>HRD</h1>
    <ul>
    @foreach ($data_hrd as $data)
        <li>{{ $data->sender }}</li>
        <li>{{ $data->receiver }}</li>
        <li>{{ $data->message }}</li>
    @endforeach
    </ul>
</body>

</html>
