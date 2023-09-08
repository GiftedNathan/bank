@extends('layouts.app')

@section('title', 'Savings')

@section('content')
    <div class="">
        <h1 class="text-2xl font-bold mb-5">Welcome</h1>
        <div>
            <a href="{{ route('savings.create') }}" class="py-2 px-4 bg-green-700 text-slate-100 rounded-md">Add savings
                record</a>
        </div>

        {{-- {{dd($savings); }} --}}
        @if ($savings->isEmpty())
            <div class="m-auto bg-gray-50 px-4 py-6 my-6 rounded-2xl min-w-[700px]">
                <h3 class="text-xl font-bold mb-5">No savings record found</h3>
                <p class="text-base">Kindly add appropraite records</p>
            </div>
        @else
            <div class="bg-white px-4 py-6 my-6 rounded-2xl">
                <h3 class="text-xl font-bold">List of savings</h3>
                <table>
                    <thead class="">
                        <tr class="text-sm text-slate-800 uppercase border-b-2">
                            <th class="py-4 px-4 text-left">s/n</th>
                            <th class="py-4 px-4 text-left">User ID</th>
                            <th class="py-4 px-4 text-left">name</th>
                            <th class="py-4 px-4 text-left">Amount</th>
                            <th class="py-4 px-4 text-left">Month</th>
                            <th class="py-4 px-3 text-left">view</th>
                            <th class="py-4 px-3 text-left">edit</th>
                            <th class="py-4 px-3 text-left">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($savings as $saving)
                            <tr class="text-sm text-slate-600 border-b-[1px]">
                                <td class="py-4 px-4 text-left">{{ $saving->id }}</td>
                                <td class="py-4 px-4 text-left">{{ $saving->user_id }}</td>
                                <td class="py-4 px-4 text-left font-bold capitalize">{{ $saving->name }}</td>
                                <td class="py-4 px-4 text-left">{{ $saving->amount }}</td>
                                <td class="py-4 px-4 text-left">{{ $saving->month }}</td>
                                <td class="py-4 px-3 text-left">view</td>
                                <td class="py-4 px-3 text-left">edit</td>
                                <td class="py-4 px-3 text-left">delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
