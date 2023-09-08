@extends('layouts.app')

@section('title', 'users')

@section('content')
    {{-- {{ dd($users) }} --}}
    <div class="bg-white px-4 py-6 my-6 rounded-2xl">
        <h3 class="text-xl font-bold">List of users</h3>
        <table>
            <thead class="">
                <tr class="text-sm text-slate-800 uppercase border-b-2">
                    <th class="py-4 px-4 text-left">s/n</th>
                    <th class="py-4 px-4 text-left">name</th>
                    <th class="py-4 px-4 text-left">acount details</th>
                    <th class="py-4 px-4 text-left">Total savings</th>
                    <th class="py-4 px-4 text-left">next of kin</th>
                    <th class="py-4 px-3 text-left">view</th>
                    <th class="py-4 px-3 text-left">edit</th>
                    <th class="py-4 px-3 text-left">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="text-sm text-slate-600 border-b-[1px]">
                        <td class="py-4 px-4 text-left">{{ $user->id }}</td>
                        <td class="py-4 px-4 text-left flex gap-2">
                            <img src="./images/team-3.jpg" alt="" class="w-10 rounded-full" />
                            <div class="">
                                <p class="font-bold capitalize">{{ $user->name }}</p>
                                <p>{{ $user->email }}</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-left">
                            <p class="font-semibold capitalize">Access nank</p>
                            <p>0012348171</p>
                        </td>
                        <td class="py-4 px-4 text-left">
                            <p class="font-semibold capitalize">savings</p>
                            <p>23,400</p>
                        </td>
                        <td class="py-4 px-4 text-left">
                            <p class="font-semibold capitalize">mary emmanuel</p>
                            <p>08123456213</p>
                        </td>
                        <td class="py-4 px-3 text-left">view</td>
                        <td class="py-4 px-3 text-left">edit</td>
                        <td class="py-4 px-3 text-left">delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
