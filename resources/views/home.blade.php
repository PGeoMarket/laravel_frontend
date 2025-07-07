@extends('layouts.app')

@section('content')
    {{-- Contenedor de filtrar y ubicacion --}}
    <div class="fixed w-full flex justify-between items-center bg-background my-[-10px] py-2">
        {{-- Filtrar --}}
        <ul class="nav flex-1/3" x-data={open:false}>
            <li>
                {{-- Boton filtrar --}}
                <button class="text-white text-[16px] p-2 rounded-xl font-semibold text-center block min-w-[90px]"
                    :class="{ 'bg-azulSecundario': open, 'bg-azulPotente': !open }" x-on:click = "open = !open"
                    x-on:click.away= "open = false">Filtrar</button>

                <ul {{-- Filtros --}}
                    class="absolute bg-white text-textosNoNegro translate-x-2 translate-y-0 min-w-[200px] text-left"
                    x-show = "open">
                    <li class="filtros">Filtrar por precio <img src="{{ asset('svg/icons/arrowBlue.svg') }}"
                            class="w-fit float-right ml-5 translate-y-[100%] rotate-90" alt=""></li>
                    <li class="filtros">Filtrar por cercania <img src="{{ asset('svg/icons/arrowBlue.svg') }}"
                            class="w-fit float-right ml-5 translate-y-[100%] rotate-90" alt=""></li>
                    <li class="filtros">Filtrar por categoria <img src="{{ asset('svg/icons/arrowBlue.svg') }}"
                            class="w-fit float-right ml-5 translate-y-[100%] rotate-90" alt=""></li>
                </ul>
            </li>

        </ul>
        {{-- Ubicacion --}}
        <div class="flex-1/2" x-data={open:false}>
            <div class="text-azulSecundario cursor-pointer flex items-center" x-on:click = "open = !open">
                <img src="{{ asset('svg/icons/location.svg') }}" class="float-left mr-2" alt="">
                Santander de Quilichao
            </div>
            <div x-show = "open" x-init="if (open) document.body.classList.add('overflow-hidden')"
                class="bg-gray-500/50 h-full w-full fixed top-0 left-0 z-50 select-none">
                @include('components.mapa')
            </div>
        </div>
    </div>

    @include('includes.test')

@endsection
