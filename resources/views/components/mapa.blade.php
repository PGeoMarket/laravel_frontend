<div class="fixed bg-white text-textosNoNegro inset-x-[8%] inset-y-[1%] overflow-auto rounded-2xl">

    <div x-on:click= "open = !open" class="absolute top-4 left-4 cursor-pointer">
        <img src="{{ asset('svg/icons/back-icon.svg') }}" alt="Volver" class="w-8 h-8">
    </div>

    <h1 class="text-center text-[32px] pt-10">Ubicación actual</h1>
    <div id='gmap_canvas' class="border border-borde2 rounded-2xl mx-3 md:mx-10 h-[70%] flex items-center justify-center">

        <script>
            function initMap() {
                const map = new google.maps.Map(document.getElementById('gmap_canvas'), {
                    zoom: 15,
                    center: {
                        lat: 3.0082918,
                        lng: -76.5055133
                    },
                    mapTypeId: 'roadmap'
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0Q2Ie6x0xJiy-PuoeejQp-ZMD86ohTRM&callback=initMap" async
            defer></script>


    </div>
    <div class="flex justify-center my-4">
        <div class="w-fit max-w-[80%] px-4 border-[1px] border-borde2 rounded-md">
            Santander de Quilichao
        </div>
    </div>
    <div class="flex justify-center gap-4 mt-8 mb-4">
        <button class="btn_negative">Cancelar</button>
        <button class="btn_positive">Confirmar</button>
    </div>
</div>
