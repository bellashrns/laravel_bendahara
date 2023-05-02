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
            @if (auth()->user()->role == 3)
                <div class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md p-4 gap-4">
                    <div class="">
                        <h2>Submit Payment</h2>
                    </div>
                    <form action="/bendahara" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="grid md:grid-cols-2">
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
                                    @if ($bendahara -> id == $user_bendahara -> id)
                                    <form action="/bendahara/{{ $bendahara -> id}}" method="POST">
                                        @csrf
                                        @method('PUT')
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
                                            <select id="type" name="type" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @if ( $bendahara->type == 'Income')
                                                    <option value="Income">Income</option>
                                                    <option value="Expense">Expense</option>
                                                    @else
                                                    <option value="Expense">Expense</option>
                                                    <option value="Income">Income</option>
                                                    @endif
                                            </select>
                                            </td>
                                            <td class="px-6 py-4">
                                            <input id="value" name="value" type="text" value="{{ $bendahara -> value}}" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                                            </td>
                                            <td class="px-6 py-4">
                                                <input id="notes" name="notes" type="text" value="{{ $bendahara -> notes}}" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="{{ 'http://127.0.0.1:8000/storage/'. $bendahara->image }}" class="text-blue-500">
                                                Image
                                                </a>
                                            </td>
                                            <td class="px-6 py-4"> 
                                                <select id="status" name="status" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @if( $bendahara->notes == '1')
                                                    <option value="1">Pending</option>
                                                    <option value="2">Approved</option>
                                                    <option value="3">Declined</option>
                                                    @elseif ( $bendahara->notes == '2')
                                                    <option value="2">Approved</option>
                                                    <option value="1">Pending</option>
                                                    <option value="3">Declined</option>
                                                    @else
                                                    <option value="3">Declined</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Approved</option>
                                                    @endif
                                                </select>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="submit"><a class="font-bold text-blue-500">SUBMIT</a></button>
                                                
                                            </td>
                                        </tr>
                                    </form>
                                    @else
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
                                        <a href="/bendahara/{{ $bendahara -> id}}/edit" class="font-bold text-blue-500">EDIT</a>
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
        </div>
    </div>
</body>

</html>
