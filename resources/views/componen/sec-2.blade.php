<section id="main" class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden relative mx-auto">
    <div class=" h-full w-full">
        <div class="w-full h-[15vh] bg-gradient-to-b from-primary-600 via-white/0 to-white/0 absolute"></div>
        <div style="background-image: url('/img/cover/2(1).webp')" class="w-full h-[45vh] bg-cover bg-no-repeat bg-bottom"></div>

        <div class="text-center pt-14 bg-gradient-to-b from-primary-500 to-primary-100 h-full rounded-t-full  absolute w-[125%] left-1/2 -translate-x-1/2 top-[30%] z-20">
            <h2 class="text-2xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
            <h1 class="text-5xl playfair-display my-2 drop-shadow-2xl textShadow">{{$nama1}} & {{$nama2}}</h1>
            <h2 class="text-lg  textShadow">{{$hari}}, {{ $tanggal }} Juni 2024</h2>

            <div class="grid grid-cols-4 gap-3 w-full max-w-lg mt-12 mx-auto px-14" id="countdown">
                <div class="bg-primary-100 border-2 border-primary-800 h-20 grid place-items-center rounded-xl font-bold text-3xl" id="days">0</div>
                <div class="bg-primary-100 border-2 border-primary-800 h-20 grid place-items-center rounded-xl font-bold text-3xl" id="hours">0</div>
                <div class="bg-primary-100 border-2 border-primary-800 h-20 grid place-items-center rounded-xl font-bold text-3xl" id="minutes">0</div>
                <div class="bg-primary-100 border-2 border-primary-800 h-20 grid place-items-center rounded-xl font-bold text-3xl" id="seconds">0</div>
            </div>
            <div class="grid grid-cols-4 gap-3 w-full max-w-lg -mt-1 mx-auto px-14">
                <div class="bg-primary-100 border-2 border-primary-800 grid place-items-center rounded-xl text-lg font-medium">Hari</div>
                <div class="bg-primary-100 border-2 border-primary-800 grid place-items-center rounded-xl text-lg font-medium">Jam</div>
                <div class="bg-primary-100 border-2 border-primary-800 grid place-items-center rounded-xl text-lg font-medium">Menit</div>
                <div class="bg-primary-100 border-2 border-primary-800 grid place-items-center rounded-xl text-lg font-medium">Detik</div>
            </div>

            <div class="mt-12 w-fit mx-auto">
                <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=The+wedding+of+%7C+Sidik+%26+Dea&details=%3Cp%3ETerima+Kasih+telah+membarikan+doa+dan+restu+dalam+acara+pernikahan+kami%3C%2Fp%3E&dates=20240627T070000Z%2F20240627T100000Z&ctz=Asia/Jakarta" 
                    class="flex mb-20 items-center space-x-2 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 border-2 font-medium rounded-3xl text-sm pl-5 pr-7 py-2.5 text-center">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                    </svg>
                    
                    <p class="text-lg font-medium">
                        Save The Date
                    </p>
                </a>
            </div>


        </div>
    </div>
</section>