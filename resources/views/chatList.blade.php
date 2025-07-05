@extends('layouts.app')

@section('content')
    <div class="bg-white border-3 border-borde1 rounded-lg relative h-[calc(100vh-(4rem+24px))] z-10 p-2 grid grid-rows-[auto_1fr]">

        <!-- Botón de volver (debe ir directo en el contenedor grid) -->
        <img src="{{ asset('svg/icons/back-icon.svg') }}" class="absolute top-2 left-2 cursor-pointer" onclick="history.back()">

        <!-- Título (primera fila del grid) -->
        <p class=" text-4xl font-semibold text-azulPotente mx-auto w-fit mt-2 md:text-5xl">Chats</p>

        <!-- Área scrollable (segunda fila del grid) -->
        <div class="grid md:grid-cols-2 h-full min-h-0">
            <div class="min-h-0 overflow-y-auto mt-2 flex flex-col gap-2">
            <div class="border-3 border-borde1 rounded-lg p-2 grid grid-cols-[auto_1fr_auto] grid-rows-[auto_auto] items-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-gray-100 overflow-hidden rounded-full shadow row-span-2 mr-1">
                        <img src="{{ asset('svg/icons/chatSupport.svg') }}" alt="" class="w-full h-full object-cover" />
                    </div>
                    <p class="text-azulPotente font-semibold text-[0.9em] mt-1 md:text-[1.2em]">Soporte</p>
                    <div class="row-span-2 flex flex-col justify-between items-end h-full self-stretch text-sm text-textosNoNegro">
                        <p>hoy</p>
                        <p>23:25</p>
                    </div>
                    <p class="text-textosNoNegro text-[0.8em] md:text-[1em]">Juan: valee gracias. uwu</p>
                </div>
            {{-- Aquí van tus mensajes (sin cambios) --}}
            @for ($i = 0; $i < 10; $i++)
                <div class="border-3 border-borde1 rounded-lg p-2 grid grid-cols-[auto_1fr_auto] grid-rows-[auto_auto] items-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-gray-100 overflow-hidden rounded-full shadow row-span-2 mr-1">
                        <img src="{{ asset('img/florhuila.png') }}" alt="" class="w-full h-full object-cover" />
                    </div>
                    <p class="text-azulPotente font-semibold text-[0.9em] mt-1 md:text-[1.2em]">Nueva publicación de tienda Depósito Santander</p>
                    <div class="row-span-2 flex flex-col justify-between items-end h-full self-stretch text-sm text-textosNoNegro">
                        <p>hoy</p>
                        <p>23:25</p>
                    </div>
                    <p class="text-textosNoNegro text-[0.8em] md:text-[1em]">Juan: valee gracias. uwu</p>
                </div>
            @endfor
        </div>
        <div>
            otro contenido
        </div>
        </div>

    </div>
@endsection
