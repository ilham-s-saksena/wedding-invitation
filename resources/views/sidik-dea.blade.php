@extends('layouts.main')

@section('mainContent')
    @include('componen.sec-1')
    @include('componen.sec-2')
    @include('componen.sec-3')
    <section class="w-full max-w-lg bg-gradient-to-l from-primary-50 to-primary-200 px-2 pb-20 pt-10 mx-auto">
        
        <div class="mb-5 text-center">
            <h3 class="great-vibes-regular text-4xl font-bold">
                Save The Date
            </h3>
        </div>

        <div class="h-full w-full bg-primary-400 rounded-xl overflow-hidden pb-10 relative max-w-sm mx-auto">
            <div style="background-image: url('/img/cover/3(1).webp')" class="h-72 bg-cover bg-no-repeat bg-bottom w-full"></div>
                <div class="absolute left-0 top-48 h-24 w-full bg-gradient-to-t from-primary-400 via-primary-400/25 to-white/0 z-30"></div>
                
                <div class="px-5 pt-5 flex space-x-4">
                    <div class="text-center flex-1">
                        <p class="sacramento-regular text-3xl font-bold">Tasyakuran</p>
                        <p>Selasa - Rabu</p>  
                        <div class="flex items-center">
                            <div class="border-b flex-1 border-black"></div>
                            <p class="font-bold text-5xl">25 - 26</p>
                            <div class="border-b flex-1 border-black"></div>
                        </div>
                        <p class="font-bold">Juni 2024</p>
                        <hr class="border-black mt-5 mb-2">
                        
                        <p class="sacramento-regular text-3xl font-bold">Akad</p>
                        <p>Kamis</p>  
                        <div class="flex items-center">
                            <div class="border-b flex-1 border-black"></div>
                            <p class="font-bold text-5xl">27</p>
                            <div class="border-b flex-1 border-black"></div>
                        </div>
                        <p class="font-bold">Juni 2024</p>
                        <p>09:00 WIB</p>
                        <hr class="border-black">
                        <div class="mt-3">
                            <p class="text-sm font-bold">Bertempat di:</p>
                            <p class="text-sm">
                                Kediaman Mempelai Perempuan di Desa Kalitinggar, Kec. Padamara, Kabupaten Purbalingga, Jawa Tengah
                            </p>
                            <a href="https://www.google.com/maps/place/7%C2%B022'44.5%22S+109%C2%B018'24.9%22E/@-7.37907,109.307651,16z/data=!4m4!3m3!8m2!3d-7.3790278!4d109.3069167?hl=id&entry=ttu" 
                                target="_blank" class="flex border w-fit pl-2.5 space-x-1 pr-3.5 py-1 rounded-xl items-center border-2 border-black text-sm bg-primary-700 hover:bg-primary-900 font-bold mt-2 mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mb-0.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>

                                <span>Buka Lokasi</span>
                            </a>
                        </div>
                    </div>

                    <div class="w-1/4 flex justify-center items-center border-l pl-2 border-black">
                        <div class="-rotate-90 h-fit sacramento-regular text-5xl font-bold w-full relative">
                            <div class="absolute w-[350%] text-center left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">{{ $acara }}</div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    @include('componen.sec-5')
    @include('componen.sec-6')
    @include('componen.sec-7')
    @include('componen.sec-8')
    @include('componen.sec-9')
    @include('componen.sec-10')
@endsection
