<nav class="bg-[#f8fafc] border-b border-[#e5e7eb] px-4 py-2 height-3000 flex items-center justify-between">

    <!-- logo y nombre -->
    <div class="flex items-center">
        <img src="{{ asset('svg/icons/logo.svg') }}" alt="GeoMarket Logo" class="cursor-pointer" />

        <img src="{{ asset('svg/icons/geomarket.svg') }}" alt="" class="cursor-pointer">
    </div>
    <!-- input y lupa -->
    <div class="flex-1 flex justify-center">
        <div class="relative max-w-[200px]">
            <input type="text" placeholder="Busca aquí"
                class="w-full py-2 pl-4 pr-10 border-2 border-[#cfd8dc] rounded-lg text-base text-[#153047] bg-white placeholder-[#b0bec5] focus:outline-none focus:border-[#4f8cff] transition" />
        </div>
        <img src="{{ asset('svg/icons/lupa.svg') }}" alt="" class="cursor-pointer ml-2">
    </div>
    <!-- tema y menú -->
    <div>
        <div class="flex items-center space-x-4">
            <img src="{{ asset('svg/icons/teme.svg') }}" alt="Tema" class="cursor-pointer">
            <img src="{{ asset('svg/icons/menu.svg') }}" alt="Menú" class="cursor-pointer">
        </div>
    </div>
</nav>
