<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Bendahara</title>
</head>

<body>
    @if (auth()->user()->role != '3')
        <script>
            window.location = "/admin";
        </script>
    @endif
    <h1>Bendahara</h1>

    @foreach ($data_bendahara as $data)
    @endforeach
</body>

</html>
