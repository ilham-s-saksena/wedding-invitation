<!-- drawer init and toggle -->
<div class="hidden">
   <button class="hidden" type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
   Show drawer
   </button>
</div>

<!-- drawer component -->
<div id="drawer-example" class="fixed top-0 left-0 z-50 overflow-hidden h-screen transition-transform bg-white w-screen transform-all grid place-items-center place-items-center " tabindex="-1" aria-labelledby="drawer-label" aria-modal="true" role="dialog">

   <div class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden">

        <div id="default-carousel" class="z-10 absolute overflow-hidden border w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-screen overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/1(1).webp')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/2(1).webp')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/3(1).webp')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                
            </div>
        </div>

        <div class="absolute w-full h-1/2 left-0 top-0 bg-gradient-to-b from-primary-500/75 via-white/25 to-white/0 z-40"></div>
        <div class="absolute w-full h-[80vh] left-0 bottom-0 bg-gradient-to-t from-primary-700 via-white/25 to-white/0 z-40"></div>

        
        <div class="z-50 w-full">
            <h2 class="text-2xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
            <h1 class="text-5xl playfair-display mb-2 drop-shadow-2xl textShadow">{{ $nama1 }} & {{ $nama2 }}</h1>
            <h2 class="text-lg  textShadow">Kamis, 27 Juni 2024</h2>

            <div class="h-[45vh]"></div>
            
            <div class="mb-5 w-full">
                <div class="w-2/3 px-2 py-4 bg-primary-400 border-4 border-amber-700 rounded-3xl mx-auto">
                    <span class="text-md font-light">Dear :</span>
                    <p class="text-lg font-semibold">{{ $tamu }}</p>
                </div>
            </div>
            <div class="flex items-center justify-center border-gray-200 ">
                <button onclick="playAudio()" type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" type="button" 
                    class="flex mb-20 items-center space-x-2 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 border font-medium rounded-3xl text-sm pl-5 pr-7 py-2.5 text-center">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                    </svg>
                    
                    <p class="text-md font-medium">
                        Buka Undangan
                    </p>
                </button>
            </div>
        </div>

    </div>
      
   
</div>