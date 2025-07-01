@extends('layouts.app')

@section('content')

    <img src="{{ asset('svg/icons/back-icon.svg') }}" alt="Volver" class="cursor-pointer">
    <div class="">

        <div class="bg-[#06406A] rounded-xl w-44 h-36 items-center justify-center mb-6 cursor-pointer display-flex">
            <img src="{{ asset('svg/icons/store.svg') }}" alt="Vendedor" class="w-12 mb-3">
            <span class="text-white text-lg">Vendedor</span>
        </div>

        <div class="bg-[#06406A] rounded-xl w-44 h-36 items-center justify-center cursor-pointer display-flex">
            <img src="{{ asset('svg/icons/cart.svg') }}" alt="Consumidor" class="w-12 mb-3 cursor-pointer">
            <span class="text-white text-lg">Consumidor</span>
        </div>
    </div>


@endsection
