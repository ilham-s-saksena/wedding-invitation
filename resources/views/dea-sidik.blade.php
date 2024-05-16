<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $nama1 }} & {{ $nama2 }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Space+Grotesk:wght@300..700&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">


        <style>
            

            .space-grotesk {
            font-family: "Space Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
            }

            .sacramento-regular {
            font-family: "Sacramento", cursive;

            font-style: normal;
            }

            .playfair-display {
            font-family: "Playfair Display", serif;
            font-weight: 800;
            font-style: normal;
            }


            .great-vibes-regular {
            font-family: "Great Vibes", cursive;
            font-weight: 900;
            font-style: normal;
            }

            .freehand-regular {
            font-family: "Freehand", cursive;
            font-weight: 400;
            font-style: normal;
            }

            .textShadow {
                text-shadow: -5px 2px 10px white;
            }
        </style>
    </head>

    <body class="font-sans antialiased overflow-hidden">
    
    <audio id="myAudio">
        <source src="music/lagu-nikah.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    @include('componen.notif')

    @include('componen.cover')

    <main class="w-screen overflow-hidden relative">
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
                <div style="background-image: url('/img/cover/3.webp')" class="h-72 bg-cover bg-no-repeat bg-bottom w-full"></div>
                    <div class="absolute left-0 top-48 h-24 w-full bg-gradient-to-t from-primary-400 via-primary-400/25 to-white/0 z-30"></div>
                    
                    <div class="px-5 pt-5 flex space-x-4">
                        <div class="text-center flex-1">
                            <p class="sacramento-regular text-3xl font-bold">Tasyakuran</p>
                            <p>Rabu</p>  
                            <div class="flex items-center">
                                <div class="border-b flex-1 border-black"></div>
                                <p class="font-bold text-5xl">26</p>
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
                                <p class="text-sm">{{ $tempat }}</p>
                                <a href="{{ $button }}" target="_blank" class="flex border w-fit pl-2.5 space-x-1 pr-3.5 py-1 rounded-xl items-center border-2 border-black text-sm bg-primary-700 hover:bg-primary-900 font-bold mt-2 mx-auto">
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
    </main>

<script>
    // Tanggal target (27 Juni 2024)
    var targetDate = new Date("June 27, 2024 00:00:00").getTime();

    // Memperbarui hitung mundur setiap detik
    var x = setInterval(function() {

        // Waktu sekarang
        var now = new Date().getTime();

        // Jarak antara sekarang dan tanggal target
        var distance = targetDate - now;

        // Menghitung hari, jam, menit, dan detik
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Menampilkan hasil di elemen HTML yang sesuai
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // Jika hitung mundur sudah berakhir, tampilkan pesan
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Waktu sudah berakhir!";
        }
    }, 1000);
</script>

<script>
  var audio = document.getElementById("myAudio");

  function playAudio() {
    audio.play();
  }

  function pauseAudio() {
    audio.pause();
  }
  
</script>
                
    </body>
</html>
