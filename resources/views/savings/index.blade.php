@extends('layouts.app')

@section('title', 'Savings')

@section('content')
    <div class="">
        <h1>Welcome</h1>
        <div>
            <a href="{{ route('savings.create') }}">Add savings record</a>
        </div>

        {{-- {{dd($savings); }} --}}
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>User ID</td>
                        <td>NAME</td>
                        <td>AMOUNT</td>
                        <td>TOTAL</td>
                        <td>MONTH</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($savings as $saving)
                        <tr>
                            <td>{{ $saving->id }}</td>
                            <td>{{ $saving->user_id }}</td>
                            <td>{{ $saving->name }}</td>
                            <td>{{ $saving->amount }}</td>
                            <td>{{ $saving->total }}</td>
                            <td>{{ $saving->month }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
