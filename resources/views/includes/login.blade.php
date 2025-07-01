<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoMarket - Iniciar sesión</title>
    @vite('resources/css/app.css') {{-- Tailwind Vite --}}
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen px-3">

    <div class="bg-white rounded-xl shadow-lg p-4 pb-6 w-full 
                max-w-[360px] 
                md:max-w-[300px] 
                lg:max-w-[360px] 
                relative">
        
        {{-- Botón volver con ícono --}}
        <a href="{{ url()->previous() }}" class="absolute top-4 left-4">
            <img src="{{ asset('svg/icons/back-icon.svg') }}" alt="Volver" class="w-8 h-8">
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
                class="w-full px-4 py-1 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 border-borde2 placeholder-gray-300" />

            {{-- Campo de contraseña --}}
            <input type="password" name="password" placeholder="Contraseña" required
                class="w-full px-4 py-1 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 border-borde2 placeholder-gray-300" />

            {{-- Botones siempre juntos --}}
            <div class="flex justify-center gap-1 flex-nowrap">
                <a href="#" class="btn_negative">Registrarse</a>
                <button type="submit" class="btn_positive">Iniciar sesión</button>
            </div>

            {{-- Líneas separadoras --}}
            <div class="flex items-center justify-center p-2">
                <div class="w-20 h-px bg-gray-300"></div>
                <span class="mx-3"></span>
                <div class="w-20 h-px bg-gray-300"></div>
            </div>

            {{-- Recuperar contraseña --}}
            <div class="mt-4 text-center text-[15px] ">
                <a href="#" class="text-blue-500  hover:underline">Recuperar Contraseña</a>
            </div>
        </form>
    </div>

</body>

</html>
