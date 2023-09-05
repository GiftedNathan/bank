<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>appBank</title>
</head>

<body>
    {{-- header  --}}
    @include('components.header')

    <div class="flex gap-3 bg-gray-100 px-6 py-6">
        @include('components.sidebar')

        <main class="px-4 py-6 rounded-2xl">
            main
        </main>
    </div>
</body>

</html>
