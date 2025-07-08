<div class="flex justify-center p-10 w-full ">
    <div class="absolute top-[10%] md:top-[30%] border border-gray-300 bg-white rounded-xl w-[90%] md:w-[500px] p-2 self-center">
    <!--icono de regreso-->
    <img src="{{ asset('svg/icons/back-icon.svg') }}" alt="Volver" class="cursor-pointer">

    <!--caja de las opciones-->
    <div class="rounded-xl flex flex-wrap justify-center">
        <h5 class="text-2xl font-normal text-gray-800 text-center mb-1 mt-2 leading-tight w-full">
            ¿como desea registrarse?
        </h5>
        <!--boton de registro como vendedor-->
        <div class="flex flex-col md:flex-row items-center gap-x-10">
            <div
                class="bg-[#06406A] rounded-xl flex-col w-[182px] h-[182px] p-9 items-center justify-center mb-6 cursor-pointer display-flex flex">
                <img src="{{ asset('svg/icons/store.svg') }}" alt="Vendedor" class="w-[62px] h-[62px] mb-3">
                <span class="text-white text-lg">Vendedor</span>
            </div>
            <!--boton de registro como consumidor-->
            <div
                class="bg-[#06406A] rounded-xl flex-col w-[182px] h-[182px] p-9 items-center justify-center mb-6 cursor-pointer display-flex flex">
                <img src="{{ asset('svg/icons/cart.svg') }}" alt="Consumidor"
                    class="w-[62px] h-[62px] mb-3 cursor-pointer ">
                <span class="text-white text-lg">Consumidor</span>
            </div>
        </div>
    </div>
</div>

</div>