@extends('layouts.app')

@section('content')
    <div class="border-1 border-borde2 bg-blancoSucio">
        <div>
            <button class="btn_negative">Cancelar</button>
            <button class="btn_positive">Publicar</button>
        </div>
        <div>
            <div class="w-[20px] h-[20px] border-2 rounded-3xl"></div>
            <div class="flex items-center space-x-4">
                <label for="upload"
                    class="cursor-pointer px-4 py-2 btn_positive transition">
                    Cargar imagen
                </label>
                <input type="file" id="upload" class="hidden" accept="image/*">
            </div>
        </div>

    </div>
@endsection
