@extends('layouts.sidebar')

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
@section('sidebar')
@endsection

    <div class="p-4 xl:ml-80">
        <div class="p-4">      
            <div class="mb-6">
            @if (auth()->user()->role == 2)
                <div class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4">
                    <div class="">
                        <h2>Submit Payment</h2>
                    </div>
                    <form action="/bendahara" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="grid grid-cols-2">
                        <div>
                            File
                        </div>
                        <div class="relative w-full min-w-[200px]">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer  dark:text-gray-400 focus:outline-none dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image">
                            <small class="text-gray-400">JPG, JPEG, PNG (MAX. 2MB)</small>               
                        </div>
                        <div>
                            Month
                        </div>
                        <div class="relative w-full min-w-[200px] h-11">
                        <select id="month" name="month" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        </div>
                        <div>
                            Notes
                        </div>
                        <div class="relative w-full min-w-[200px] h-11">
                            <input name="notes" id="notes" type="text" placeholder="Optional" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                        </div>
                        <div>
                        <input id="type" name="type" type="hidden" value="Income">
                        <input id="status" name="status" type="hidden" value="1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-2">
                            <button type="submit" class="bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                                Submit
                            </button>
                        </div>
                        </div>
                </form>
            </div>
            <div class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4 mt-4">
                <div class="">
                    <h2>Transaction List</h2>
                    <div class="mt-2 relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Transaction Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Month
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Notes
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bendaharas->sortByDesc('date') as $bendahara)
                                @if ( $bendahara->user_id == auth()->user()->id)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> date}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ 'http://127.0.0.1:8000/storage/'. $bendahara->image }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset('storage/' . $bendahara->image) }}" alt="" class="h-20 w-20">
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> month}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> notes}}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($bendahara -> status == '1')
                                        <small class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">PENDING</small>
                                        @elseif ($bendahara -> status == '2')
                                        <small class="text-white bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">APPROVED</small>
                                        @else
                                        <small class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">DECLINED</small>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
            @if (auth()->user()->role == 3)
                <div class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4">
                    <div class="">
                        <h2>Submit Payment</h2>
                    </div>
                    <form action="/bendahara" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="grid grid-cols-2">
                            <div>
                                File
                            </div>
                            <div class="relative w-full min-w-[200px]">
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer  dark:text-gray-400 focus:outline-none dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image">
                                <small class="text-gray-400">JPG, JPEG, PNG (MAX. 2MB)</small>               
                            </div>
                            <div>
                                Month
                            </div>
                            <div class="relative w-full min-w-[200px] h-11">
                            <select id="month" name="month" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            </div>
                            <div>
                                Type
                            </div>
                            <div class="relative w-full min-w-[200px] h-11">
                            <select id="type" name="type" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Income">Income</option>
                                <option value="Expense">Expense</option>
                            </select>
                            </div>
                            <div>
                                Value
                            </div>
                            <div class="relative w-full min-w-[200px] h-11">
                                <input id="value" name="value" type="text" placeholder="Required" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                            </div>
                            <div>
                                Notes
                            </div>
                            <div class="relative w-full min-w-[200px] h-11">
                                <input id="notes" name="notes" type="text" placeholder="Required" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                            </div>
                            <div>
                            </div>
                            <input id="status" name="status" type="hidden" value="2">
                            <div class="relative w-full min-w-[200px] h-11 mt-2">
                                <button type="submit" class="bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4 mt-4">
                <div class="">
                    <h2>Transaction List</h2>
                    <div class="mt-2 relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Month
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Notes
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bendaharas->sortBy('status') as $bendahara)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> month}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> date}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> type}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> value}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bendahara -> notes}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ 'http://127.0.0.1:8000/storage/'. $bendahara->image }}" class="text-blue-500">
                                        Image
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($bendahara -> status == '1')
                                        <p>Pending</p>
                                        @elseif ($bendahara -> status == '2')
                                        <p>Approved</p>
                                        @else
                                        <p>Declined</p>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-bold text-blue-500">EDIT</a>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</body>

</html>
