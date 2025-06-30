<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoMarket - Iniciar sesión</title>
    @vite('resources/css/app.css') {{-- Tailwind Vite --}}
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen px-3">

    <div class="bg-white rounded-xl shadow-lg p-8 w-full 
                max-w-[360px] 
                md:max-w-[300px] 
                lg:max-w-[360px] 
                relative">
        
        {{-- Botón volver con ícono --}}
        <a href="{{ url()->previous() }}" class="absolute top-4 left-4 bg-white p-2 rounded-md shadow">
            <img src="{{ asset('svg/icons/menu.svg') }}" alt="Volver" class="w-5 h-5">
        </a>

        {{-- Encabezado con logos --}}
        <div class="flex items-center justify-center flex-col mb-7">
            <div class="mb-2">
                <img src="{{ asset('svg/icons/logo.svg') }}" alt="GeoMarket Logo" class="w-25 h-20">
            </div>
            <div>
                <img src="{{ asset('svg/icons/geomarket.svg') }}" alt="GeoMarket Título"
                    class="w-[180px] sm:w-[200px] md:w-[240px] lg:w-[220px] h-auto">
            </div>
        </div>

        {{-- Formulario --}}
        <form method="POST" class="space-y-4">
            @csrf

            {{-- Campo de correo --}}
            <input type="email" name="email" placeholder="Correo" required autofocus
                class="w-full px-4 py-1 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400" />

            {{-- Campo de contraseña --}}
            <input type="password" name="password" placeholder="Contraseña" required
                class="w-full px-4 py-1 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400" />

            {{-- Botones siempre juntos --}}
            <div class="flex justify-center gap-1 flex-wrap">
                <a href="#" class="btn_negative">Registrarse</a>
                <button type="submit" class="btn_positive">Iniciar sesión</button>
            </div>

            {{-- Líneas separadoras --}}
            <div class="flex items-center justify-center mt-2">
                <div class="w-20 h-px bg-gray-300"></div>
                <span class="mx-5 text-gray-400 text-xs"></span>
                <div class="w-20 h-px bg-gray-300"></div>
            </div>

            {{-- Recuperar contraseña --}}
            <div class="mt-4 text-center text-sm">
                <a href="#" class="text-blue-500 hover:underline">Recuperar Contraseña</a>
            </div>
        </form>
    </div>

</body>

</html>
