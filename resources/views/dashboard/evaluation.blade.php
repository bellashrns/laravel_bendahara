<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Evaluation</title>
</head>

<body>
    <h1>send evaluation</h1>
    <form action="/evaluation" method="POST" class="grid justify-center">
        @csrf
        <label for="receiver" class="text-[#000000]">Receiver</label>
        <input placeholder="Receiver" type="text" name="receiver" id="receiver"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" 
            value="{{ old('receiver') }}" required>

        <label for="message" class="text-[#000000]">Message</label>
        <input placeholder="Message" type="text" name="message" id="message"
            class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" 
            value="{{ old('message') }}" required>
        
        <div class="flex flex-row mt-2">
            <button class="btn btn-wide w-full bg-[#000000] mt-2">
                <h1>===SEND===</h1>
            </button>
        </div>
    </form>

    <h1>list evaluation</h1>
    <ul>
        @foreach ($msgs as $msg)
            <li>{{ $msg->sender }}</li>
            <li>{{ $msg->receiver }}</li>
            <li>{{ $msg->message }}</li>
        @endforeach
    </ul>
</body>

</html>
