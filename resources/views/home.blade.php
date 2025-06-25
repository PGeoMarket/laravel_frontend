@extends('layouts.app')

@section('content')
    <div
        class="bg-white flex flex-col w-[256px] h-[412px] border-[3px] border-border-product px-[15px] pt-[15px] rounded-lg">

        <div class="relative bg-red-100 h-[65%] bg-full border-[1px] border-border-oscuro rounded-md">

            <div class="absolute bottom-[10px] right-[10px]">estrellas</div>
        </div>

        <div class="flex flex-col justify-between gap-5 font-medium">
            <p class="text-[24px] text-texto">Arroz huila</p>
            <span class="text-[30px] text-texto">$1000 </span>
        </div>

    </div>
@endsection
