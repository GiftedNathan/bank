@extends('layouts.app')

@section('title', 'Add Savings Record')

@section('content')
    <h1>Add savings record</h1>
    <div>
        @if ($errors->any())
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        @endif
    </div>
    {{-- {{dd($users);}} --}}
    <div class="m-auto bg-gray-50 px-4 py-6 my-6 rounded-2xl">
        <h3 class="text-xl font-bold mb-5">Enter transaction details</h3>
        <form action="{{ route('savings.store') }}" method="post"
            class="max-w-md flex flex-wrap bg-white px-3 py-4 rounded-xl">
            @csrf
            <div class="w-full mb-3">
                <label for="" class="text-sm font-semibold capitalize">User ID</label>
                <select class="w-full border rounded-md pl-2 h-10" name="user_id" id="">
                    <option value=""> -- Select Member --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-full mb-3">
                <label for="name" class="text-sm font-semibold capitalize">name</label>
                <input type="text" name="name" id="name" class="w-full border rounded-md pl-2 h-10" />
            </div>
            <div class="w-full mb-3">
                <label for="amount" class="text-sm font-semibold capitalize">Amount</label>
                <input type="text" name="amount" id="amount" class="w-full border rounded-md pl-2 h-10" />
            </div>

            <div class="w-full mb-3">
                <label for="month" class="text-sm font-semibold capitalize">month</label>
                <input type="month" name="month" id="month" class="w-full border rounded-md pl-2 h-10" />
            </div>

            <div class="flex justify-end items-center gap-4">
                <button type="clear" class="rounded-md bg-red-600 px-6 py-2 capitalize text-slate-50 hover:bg-red-400">
                    clear input
                </button>
                <button type="submit"
                    class="rounded-md bg-green-600 px-6 py-2 capitalize text-slate-50 hover:bg-green-400">
                    submit
                </button>
            </div>
        </form>
    </div>

    <div class="m-auto bg-gray-50 px-4 py-6 my-6 rounded-2xl">
        <h3 class="text-xl font-bold mb-5">Contact information</h3>
        <form class="max-w-md flex flex-wrap bg-white px-3 py-4 rounded-xl">
            <div class="w-full mb-5">
                <label for="name" class="text-sm font-semibold capitalize">name</label>
                <input type="text" name="name" id="name" class="w-full border rounded-md pl-9 h-10" />
            </div>
            <div class="w-full mb-5">
                <label for="name" class="text-sm font-semibold capitalize">email</label>
                <input type="text" name="name" id="name" class="w-full border rounded-md pl-9 h-10" />
            </div>
            <div class="flex justify-end items-center gap-4">
                <a href="#" class="capitalize hover:text-lg">already registered?</a>
                <button type="submit"
                    class="rounded-md bg-green-600 px-6 py-2 capitalize text-slate-50 hover:bg-green-400">
                    submit
                </button>
            </div>
        </form>
    </div>
@endsection
