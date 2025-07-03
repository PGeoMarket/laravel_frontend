@extends('layouts.app')

@section('content')

<!-- Contenedor principal -->
<div class="bg-white w-[35em] h-[30em] border border-gray-400 p-4 relative">

  <!-- Botón de retroceso -->
  <button class="w-16 h-16 ml-4 mt-2">
    <img src="{{ asset('svg/icons/back-icon.svg') }}" alt="">
  </button>

  <!-- Título -->
  <h2 class="text-2xl font-sans text-[#393434] text-center mt-[-1em]">Motivo del reporte</h2>

  <!-- Opciones alineadas por la izquierda pero centradas en el contenedor -->
  <div class="mt-4 flex flex-col items-center">
    <div class="flex flex-col items-start w-[18em]">
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> producto prohibido
      </label>
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> información engañosa
      </label>
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> Spam
      </label>
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> contenido inapropiado
      </label>
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> producto peligroso
      </label>
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> práctica comercial sospechosa
      </label>
      <label class="mb-2">
        <input type="checkbox" class="mr-2"> otro motivo
      </label>

      <!-- Campo de texto adicional -->
      <input type="text" placeholder="Especificar..." class="h-8 border border-gray-300 rounded px-2 w-full mt-2">
    </div>
  </div>

  <!-- Botones -->
  <div class="absolute bottom-4 right-4 space-x-2">
    <button class="bg-[#458EFB] w-28 h-10 rounded text-white">Cancelar</button>
    <button class="bg-[#AEAEAE] w-28 h-10 rounded text-white">Reportar</button>
  </div>

</div>


@endsection