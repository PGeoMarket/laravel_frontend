<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-backgroun">

    <header>
        @include('includes.navbar')
    </header>
    {{-- no tocar ese pt-16 --}}
    <main class="pt-19 p-3">
        @yield('content')
    </main>

    {{-- <button class="btn_positive">
        registrars
    </button>
    <button class="btn_negative">
        cancelar
    </button> --}}

</body>

</html>
