<div x-data="{ open: false }" class="">
    <nav class="bg-[#f8fafc]  border-b border-[#e5e7eb] px-4 py-2 flex items-center justify-between fixed w-full h-16">
        <!-- logo y nombre -->
        <div class="flex items-center mr-3">
            <img src="{{ asset('svg/icons/logo.svg') }}" alt="GeoMarket Logo" class="cursor-pointer" />

            <img src="{{ asset('svg/icons/geomarket.svg') }}" alt="" class="cursor-pointer hidden md:block" />
        </div>
        <!-- input y lupa -->
        <div class="flex-1 flex justify-center">
            <div class="relative max-w-[200px]">
                <input type="text" placeholder="Busca aquí"
                    class="w-full py-2 pl-4 pr-10 border-2 border-[#cfd8dc] rounded-lg text-base text-[#153047] bg-white placeholder-[#b0bec5] focus:outline-none focus:border-[#4f8cff] transition" />
            </div>
            <img src="{{ asset('svg/icons/lupa.svg') }}" alt="" class="cursor-pointer ml-2" />
        </div>
        <!-- tema y menú -->
        <div>
            <div class="flex items-center gap-x-2 ml-4">
                <img src="{{ asset('svg/icons/teme.svg') }}" alt="Tema" class="cursor-pointer" />
                <img src="{{ asset('svg/icons/menu.svg') }}" class="cursor-pointer" x-on:click="open=!open" />
            </div>
        </div>
    </nav>


    <div class="fixed top-16 right-0 h-screen w-[60%] md:w-fit bg-white shadow-lg z-50 overflow-y-auto transition-transform duration-300 transform"
        x-on:click.away="open = false" x-show="open" x-transition>

        <div class=" border-borde1 h-screen overflow-hidden">
            <!-- Sección superior (perfil) -->
            <div class="bg-white flex flex-col items-center p-4 inset-shadow-sm">
                <img src="{{ asset('svg/icons/userProfiel.svg') }}" alt="Perfil"
                    class="w-12 h-12 md:w-auto md:h-auto">
                <p class="text-azulPotente text-sm md:text-lg mt-2">pedro picapiedra</p>
                <a href="" class="text-[#4690FF] text-xs md:text-base">vendedor</a>
                <p
                    class="bg-[#06406A] text-white py-1 px-3 md:px-5 w-fit rounded-[16px] mt-2 md:mt-3 text-xs md:text-sm">
                    perfil</p>
            </div>

            <!-- Menú -->
            <div class="bg-[#06406A] h-full">
                <div class="p-2 md:p-4">
                    <img src="{{ asset('svg/icons/home.svg') }}" class="inline w-7 h-7 md:w-auto md:h-auto">
                    <p class="text-white inline text-[1.2em] ml-1 md:text-[1.3em]">Inicio</p>
                </div>
                <div class="p-2 md:p-4">
                    <img src="{{ asset('svg/icons/favorites.svg') }}" class="inline w-7 h-7 md:w-auto md:h-auto">
                    <p class="text-white inline text-[1.2em] ml-1 md:text-[1.3em]">Favoritos</p>
                </div>
                <div class="p-2 md:p-4">
                    <img src="{{ asset('svg/icons/addPublication.svg') }}" class="inline w-7 h-7 md:w-auto md:h-auto">
                    <p class="text-white inline  text-[1.2em] ml-1 md:text-[1.3em]">Publicar producto</p>
                </div>
                <div class="p-2 md:p-4">
                    <img src="{{ asset('svg/icons/messages.svg') }}" class="inline w-7 h-7 md:w-auto md:h-auto">
                    <p class="text-white inline  text-[1.2em] ml-1 md:text-[1.3em]">Mensajes</p>
                </div>
                <div class="p-2 md:p-4">
                    <img src="{{ asset('svg/icons/support.svg') }}" class="inline w-7 h-7 md:w-auto md:h-auto">
                    <p class="text-white inline  text-[1.2em] ml-1 md:text-[1.3em]">Soporte y preguntas frecuentes</p>
                </div>
            </div>
        </div>
    </div>
</div>
