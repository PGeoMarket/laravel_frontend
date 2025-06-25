<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>
        @include('includes.navbar')
    </header>

    <main class="flex flex-wrap m-10 justify-center gap-7">
        @yield('content')
    </main>

    <button class="btn_positive">
        registrars
    </button>
    <button class="btn_negative">
        cancelar
    </button>

</body>

</html>
