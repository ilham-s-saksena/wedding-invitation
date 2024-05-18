<section id="home" class="fade-in w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden mx-auto">

    <div class="">                
        <div class="">
            <div style="background-image: url('/img/cover/1(1).webp')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
        </div>
        <div style="background-image: url('/img/cover/1(1).webp')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
    </div>

    <div class="absolute w-full h-1/2 left-0 top-0 bg-gradient-to-b from-primary-500/75 via-white/25 to-white/0 z-40"></div>
    <div class="absolute w-full h-[80vh] left-0 bottom-0 bg-gradient-to-t from-primary-600 via-white/25 to-white/0 z-40"></div>

    <div class="z-40">
        <h2 class="text-xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
        <h1 class="text-5xl playfair-display mb-2 drop-shadow-2xl textShadow">{{$nama1}} & {{$nama2}}</h1>
        <h2 class="text-md  textShadow">{{$hari}}, {{$tanggal}} Juni 2024</h2>

        <div class="h-[61vh]"></div>

        <div class="mb-5 w-full">
            <div class="w-2/3 px-2 py-4 bg-primary-400 border-4 border-amber-700 rounded-3xl mx-auto">
                <span class="text-md font-light">Dear :</span>
                <p class="text-lg font-semibold">{{ $tamu }}</p>
            </div>
        </div>
        
    </div>

</section>