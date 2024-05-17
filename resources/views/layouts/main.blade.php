<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $nama1 }} & {{ $nama2 }}</title>

        
        @vite(['resources/css/app.css','resources/js/app.js'])
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
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
            @yield('mainContent')
        </main>
    

        <script>
            var targetDate = new Date("June 27, 2024 00:00:00").getTime();

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = targetDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

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
