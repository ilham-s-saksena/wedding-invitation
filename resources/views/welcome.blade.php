<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">


        <style>
            .sacramento-regular {
            font-family: "Sacramento", cursive;

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
    <!-- <body class="font-sans antialiased dark:bg-black dark:text-white/50 overflow-hidden"> -->

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">



<!-- drawer init and toggle -->
<div class="hidden">
   <button class="hidden" type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
   Show drawer
   </button>
</div>

<!-- drawer component -->
<!-- <div id="drawer-example" class="fixed top-0 left-0 z-50 overflow-hidden h-screen transition-transform bg-white w-screen dark:bg-gray-800 transform-none grid place-items-center" tabindex="-1" aria-labelledby="drawer-label" aria-modal="true" role="dialog"> -->


<div id="drawer-example" class="fixed top-0 left-0 z-50 overflow-hidden h-screen transition-transform bg-white w-screen dark:bg-gray-800 grid place-items-center -translate-x-full" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
   
   


   <div class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden">

        <div id="default-carousel" class="z-10 absolute overflow-hidden border w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-screen overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/1.jpg')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/2.jpg')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/3.jpg')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                
            </div>
        </div>

        <div class="absolute w-full h-1/2 left-0 top-0 bg-gradient-to-b from-amber-500/75 via-white/25 to-white/0 z-40"></div>
        <div class="absolute w-full h-[80vh] left-0 bottom-0 bg-gradient-to-t from-amber-700 via-white/25 to-white/0 z-40"></div>

        
        <div class="z-50">
            <h2 class="text-3xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
            <h1 class="text-6xl great-vibes-regular my-2 drop-shadow-2xl textShadow">Dea & Wahyu</h1>
            <h2 class="text-lg  textShadow">Jumat, 28 Juni 2024</h2>

            <div class="h-[50vh]"></div>
            
            <div class="mb-5">
                <span class="text-md font-semibold">Dear</span>
                <p class="text-xl font-bold">Nama Tamu</p>
            </div>
            <div class="flex items-center justify-center border-gray-200 dark:border-gray-600">
                <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" type="button" 
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

             
<main class="grid w-full place-items-center">

    <section id="home" class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden">

        <div id="default-carousel" class="z-10 absolute overflow-hidden border w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-screen overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/1.jpg')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/2.jpg')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div style="background-image: url('/img/cover/3.jpg')" class="h-[80vh] absolute top-0 left-0 w-full bg-cover bg-center bg-no-repeat"></div>
                </div>
                
            </div>
        </div>

        <div class="absolute w-full h-1/2 left-0 top-0 bg-gradient-to-b from-amber-500/75 via-white/25 to-white/0 z-40"></div>
        <div class="absolute w-full h-[80vh] left-0 bottom-0 bg-gradient-to-t from-amber-700 via-white/25 to-white/0 z-40"></div>

        
        <div class="z-50">
            <h2 class="text-3xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
            <h1 class="text-6xl great-vibes-regular my-2 drop-shadow-2xl textShadow">Dea & Wahyu</h1>
            <h2 class="text-lg  textShadow">Jumat, 28 Juni 2024</h2>

            <div class="h-[60vh]"></div>
            
            <div class="mb-5">
                <span class="text-md">Dear</span>
                <p class="text-xl font-bold">Nama Tamu</p>
            </div>
            
        </div>

    </section>


    <section class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden relative">
        <div class=" h-full w-full">
            <div class="w-full h-[15vh] bg-gradient-to-b from-amber-700 to-white/0 absolute"></div>
            <div style="background-image: url('/img/cover/3.jpg')" class="w-full h-[45vh] bg-cover bg-no-repeat bg-bottom"></div>

            <div class="text-center pt-10 bg-gradient-to-b from-amber-700 to-amber-100 h-full rounded-t-full  absolute w-[60vw] left-1/2 -translate-x-1/2 top-[39vh] z-20">
                <h2 class="text-3xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
                <h1 class="text-6xl great-vibes-regular my-2 drop-shadow-2xl textShadow">Dea & Wahyu</h1>
                <h2 class="text-lg  textShadow">Jumat, 28 Juni 2024</h2>

                <div class="grid grid-cols-4 gap-5 w-full max-w-lg mt-16 mx-auto px-10">
                    <div class="bg-amber-100 border-4 border-amber-800 h-20 grid place-items-center rounded-xl font-bold text-3xl freehand-regular">10</div>
                    <div class="bg-amber-100 border-4 border-amber-800 h-20 grid place-items-center rounded-xl font-bold text-3xl freehand-regular">10</div>
                    <div class="bg-amber-100 border-4 border-amber-800 h-20 grid place-items-center rounded-xl font-bold text-3xl freehand-regular">10</div>
                    <div class="bg-amber-100 border-4 border-amber-800 h-20 grid place-items-center rounded-xl font-bold text-3xl freehand-regular">10</div>
                </div>
                <div class="grid grid-cols-4 gap-5 w-full max-w-lg -mt-1 mx-auto px-10">
                    <div class="bg-amber-100 border-4 border-amber-800 grid place-items-center rounded-xl text-lg sacramento-regular font-bold">Hari</div>
                    <div class="bg-amber-100 border-4 border-amber-800 grid place-items-center rounded-xl text-lg sacramento-regular font-bold">Jam</div>
                    <div class="bg-amber-100 border-4 border-amber-800 grid place-items-center rounded-xl text-lg sacramento-regular font-bold">Menit</div>
                    <div class="bg-amber-100 border-4 border-amber-800 grid place-items-center rounded-xl text-lg sacramento-regular font-bold">Detik</div>
                </div>

                <div class="mt-16 w-fit mx-auto">
                    <a href="" 
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

    <section class="w-full max-w-lg h-[35vh] bg-gradient-to-br from-amber-200 to-amber-700">

    </section>

    <section class="w-full max-w-lg min-h-screen bg-gradient-to-r from-amber-100 to-amber-400 px-10 pb-20 pt-10">
            
            <div class="mb-5 text-center">
                <h3 class="sacramento-regular text-5xl font-bold">
                    We Are Getting Married
                </h3>
                <p class="text-sm px-10 mt-3">
                    Assalamu’alaikum Wr. Wb. Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, InsyaaAllah kami akan menyelenggarakan acara pernikahan :
                </p>
            </div>

            <div class="h-full w-full bg-amber-50 rounded-full text-center flex flex-col justify-center py-10">
                <div>
                    <div class="w-56 h-56 rounded-full bg-amber-500 p-3 mx-auto">
                        <div style="background-image: url('/img/profile/wahyu.jpg');" class="w-full h-full rounded-full bg-cover bg-center bg-no-repeat"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h2 class="great-vibes-regular text-amber-800 text-3xl">Sidik Wahyu Hidayat</h2>
                        <div class="mt-3">
                            <p>Putra dari Bpk. Rasiman</p>
                            <p>Dan Ibu Umi</p>
                        </div>
                    </div>
                </div>
                <div class="flex my-5 px-6 items-center">
                    <div class="flex-1 border-b border-amber-700"></div>
                    <div class="great-vibes-regular text-3xl px-4 text-amber-700">&</div>
                    <div class="flex-1 border-b border-amber-700"></div>
                </div>
                <div>
                    <div class="w-56 h-56 rounded-full bg-amber-500 p-3 mx-auto">
                        <div style="background-image: url('/img/profile/wahyu.jpg');" class="w-full h-full rounded-full bg-cover bg-center bg-no-repeat"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h2 class="great-vibes-regular text-amber-800 text-3xl">Sidik Wahyu Hidayat</h2>
                        <div class="mt-3">
                            <p>Putra dari Bpk. Rasiman</p>
                            <p>Dan Ibu Umi</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>






<!-- BOOTOM NAVIGATION -->
<div class="fixed z-40 w-full h-16 max-w-lg -translate-x-1/2 bg-amber-700 border border-gray-100 rounded-full bottom-4 left-1/2">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
        
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center rounded-full hover:bg-gray-50 group">
            
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-amber-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            
            <span class="sr-only">Home</span>
        </button>

        <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
        <button data-tooltip-target="tooltip-wallet" type="button" class="inline-flex flex-col rounded-full items-center justify-center hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-amber-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="sr-only">Wallet</span>
        </button>
        <div id="tooltip-wallet" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Wallet
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>


        <button data-tooltip-target="tooltip-center" type="button" class="inline-flex flex-col rounded-full items-center justify-center hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-amber-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="sr-only">Center</span>
        </button>
        <div id="tooltip-center" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Center
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
        
        
        <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col rounded-full items-center justify-center hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-amber-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
            </svg>
            <span class="sr-only">Settings</span>
        </button>
        <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Settings
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
        <button data-tooltip-target="tooltip-profile" type="button" class="inline-flex flex-col items-center justify-center rounded-full hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-amber-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
            <span class="sr-only">Profile</span>
        </button>
        <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    
    </div>
</div>


                
    </body>
</html>
