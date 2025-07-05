@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#eaf0f7] p-2 md:p-4">
    <div class="border border-gray-300 rounded-xl p-2 md:p-4 flex flex-col md:flex-row gap-4 md:gap-6 bg-white shadow h-auto md:h-[calc(100vh-80px)]">
        <!-- Perfil vendedor -->
        <div class="w-full md:w-[350px] flex-shrink-0 flex flex-col border border-gray-300 rounded-xl p-4 md:p-6 bg-white relative mb-2 md:mb-0">
            <!-- Botón editar datos -->
            <button class="absolute top-4 right-4 bg-gray-100 rounded-md px-3 py-1 text-xs md:text-sm text-gray-700 shadow hover:bg-gray-200">
                Editar datos
            </button>
            <!-- icono perfil -->
            <div class="flex flex-col items-center mb-2 mt-2">
                <div class="bg-[#06406A] rounded-full w-20 h-20 flex items-center justify-center mb-2 relative">
                    <img src="{{ asset('svg/icons/profile.svg') }}" alt="Avatar" class="w-10 h-10">
                    <button class="absolute bottom-1 right-1 bg-gray-100 rounded-full p-1 shadow">
                        <img src="{{ asset('svg/icons/edit.svg') }}" alt="Editar" class="w-4 h-4">
                    </button>
                </div>
            </div>
            <!-- Info -->
            <div class="text-left w-full mt-2 text-[14px] md:text-[15px]">
                <div class="mb-1"><span class="font-bold">Nombre:</span> Don Goku Castañeda</div>
                <div class="mb-1"><span class="font-bold">Negocio:</span> Tiendita del dragón</div>
                <div class="mb-1"><span class="font-bold">Correo:</span> dongokucastañeda@gmail.com</div>
                <div class="mb-1"><span class="font-bold">Telefono:</span> 3001231231</div>
                <div class="mb-2"><span class="font-bold">Direccion:</span> Cr 49 No. 134A-07, C.P 11001</div>
            </div>
            <!-- Mapa, botón y estrellas -->
            <div class="flex flex-col md:flex-row items-start md:items-center gap-2 mt-2 w-full">
                <div class="relative">
                    <img src="{{ asset('img/map.png') }}" alt="Mapa" class="w-32 h-16 rounded-md border">
                    <button class="absolute left-1 bottom-1 bg-[#06406A] text-white rounded-md px-3 py-1 text-xs md:text-sm font-medium shadow hover:bg-[#05345a]">
                        Editar ubicación
                    </button>
                </div>
                <div class="flex md:ml-auto items-center mt-2 md:mt-0">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <polygon points="10,1 12,7 18,7 13,11 15,17 10,13 5,17 7,11 2,7 8,7"/>
                        </svg>
                    @endfor
                </div>
            </div>
        </div>
        <!-- Catálogo y comentarios -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Tabs -->
            <div class="flex gap-2 mb-2 md:mb-4">
                <button class="bg-[#06406A] text-white px-3 md:px-4 py-1 rounded-md text-xs md:text-sm font-semibold shadow">Catálogo</button>
                <button class="bg-gray-200 text-gray-700 px-3 md:px-4 py-1 rounded-md text-xs md:text-sm font-semibold shadow">Comentarios</button>
            </div>
            <!-- Catálogo grid con scroll -->
            <div class="flex-1 overflow-y-auto pr-1 md:pr-2">
                <div class="grid grid-cols-3 gap-4">
                    @for($i = 0; $i < 12; $i++)
                    <div class="flex flex-wrap md:m-10 m-1 justify-center gap-1 md:gap-4">
                        <!-- Botón de menú con Alpine.js -->
                        <div x-data="{ open: false }" class="absolute top-2 right-2 z-10">
                            <button @click="open = !open" class="bg-gray-100 rounded-full w-6 h-6 flex items-center justify-center text-gray-500 hover:bg-gray-200 focus:outline-none">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="1.5"/>
                                    <circle cx="12" cy="6" r="1.5"/>
                                    <circle cx="12" cy="18" r="1.5"/>
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false" class="mt-1 bg-white border rounded shadow px-2 py-1 text-xs absolute right-0 top-7 min-w-[80px]" x-transition>
                                <button class="block text-[#06406A] hover:underline w-full text-left">Editar</button>
                                <button class="block text-red-500 hover:underline w-full text-left">Eliminar</button>
                            </div>
                        </div>
                        <img src="{{ asset('img/arroz.png') }}" alt="Producto" class="w-full h-20 object-contain mb-2 rounded">
                        <div>
                            <div class="font-bold text-xs md:text-base">nombre producto</div>
                            <div class="font-bold text-base md:text-lg">$ 1000</div>
                            <div class="flex mt-1">
                                @for($j = 0; $j < 5; $j++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <polygon points="10,1 12,7 18,7 13,11 15,17 10,13 5,17 7,11 2,7 8,7"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection