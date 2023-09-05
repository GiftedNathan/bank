<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Easybank - @yield('title')</title>
</head>

<body class="bg-dots-darker">
    {{-- header  --}}
    @section('header')
        @include('layouts.header')
    @show

    <div class="flex gap-3 bg-gray-100 px-6 py-6">
        @section('sidebar')
            @include('layouts.sidebar')
        @show

        <main class="px-4 py-6 rounded-2xl">
            @yield('content')
        </main>
    </div>

    <script>
        function openMenu() {
            // document.querySelector(".sidebar").classList.toggle("ml-[-300px]");
            // document.querySelector(".sidebar").classList.add("hidden");
            // console.log('clicked')
        }
        // openMenu();
    </script>
</body>

</html>
