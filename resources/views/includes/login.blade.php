<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoMarket - Iniciar sesión</title>
    @vite('resources/css/app.css') {{-- Tailwind Vite --}}
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">

    <div class="bg-white rounded-xl shadow-lg p-8 w-[350px] relative">
        {{-- Botón volver con ícono --}}
        <a href="{{ url()->previous() }}" class="absolute top-4 left-4 bg-white p-2 rounded-md shadow">
            <img src="{{ asset('svg/icons/menu.svg') }}" alt="Volver" class="w-5 h-5">
        </a>

        {{-- Logo principal --}}
        <div class="flex justify-center">
            <img src="{{ asset('svg/icons/logo.svg') }}" alt="GeoMarket Logo" class="w-20 h-20 mb-4 cursor-pointer">
        </div>

        {{-- Título de la App --}}
        <h1 class="text-center text-3xl font-bold mb-6">
            <span class="text-gray-800">Geo</span><span class="text-blue-500">Market</span>
        </h1>

        {{-- Formulario de inicio --}}
        <form method="POST"  class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Correo" required autofocus
                class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400" />
            
            <input type="password" name="password" placeholder="Contraseña" required
                class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400" />
            
            <div class="flex justify-between gap-2">
                <a  class="w-1/2 bg-gray-300 text-gray-700 py-2 rounded-md text-center hover:bg-gray-400">
                    registrarse
                </a>
                <button type="submit" class="w-1/2 bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                    Iniciar sesión
                </button>
            </div>

            <div class="mt-4 text-center text-sm">
                <a  class="text-blue-500 hover:underline">
                    recuperar contraseña
                </a>
            </div>
        </form>
    </div>

</body>
</html>
