<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sidik & Dea</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">


        <style>
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

    @php
    $tanggal = \Illuminate\Support\Carbon::createFromDate(2024, 6, 27)->format('Y-m-d');
    @endphp


<!-- drawer init and toggle -->
<div class="hidden">
   <button class="hidden" type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
   Show drawer
   </button>
</div>

<!-- drawer component -->
<div id="drawer-example" class="fixed top-0 left-0 z-50 overflow-hidden h-screen transition-transform bg-white w-screen transform-all grid place-items-center place-items-center " tabindex="-1" aria-labelledby="drawer-label" aria-modal="true" role="dialog">


<!-- <div id="drawer-example" class="fixed top-0 left-0 z-50 overflow-hidden h-screen transition-transform bg-white w-screen grid place-items-center -translate-x-full" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true"> -->
   
   


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

        <div class="absolute w-full h-1/2 left-0 top-0 bg-gradient-to-b from-primary-500/75 via-white/25 to-white/0 z-40"></div>
        <div class="absolute w-full h-[80vh] left-0 bottom-0 bg-gradient-to-t from-primary-700 via-white/25 to-white/0 z-40"></div>

        
        <div class="z-50">
            <h2 class="text-3xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
            <h1 class="text-6xl playfair-display mb-2 drop-shadow-2xl textShadow">Dea & Sidik</h1>
            <h2 class="text-lg  textShadow">Kamis, 27 Juni 2024</h2>

            <div class="h-[50vh]"></div>
            
            <div class="mb-5">
                <span class="text-lg font-light">Dear :</span>
                <div class="w-1/2 px-2 py-4 bg-primary-400 border-4 border-amber-700 rounded-2xl mx-auto">
                    <p class="text-xl font-semibold">{{ $tamu }}</p>
                </div>
            </div>
            <div class="flex items-center justify-center border-gray-200 ">
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

             
<main class="w-screen overflow-hidden relative">

    <section id="home" class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden mx-auto">

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

        <div class="absolute w-full h-1/2 left-0 top-0 bg-gradient-to-b from-primary-500/75 via-white/25 to-white/0 z-40"></div>
        <div class="absolute w-full h-[80vh] left-0 bottom-0 bg-gradient-to-t from-primary-600 via-white/25 to-white/0 z-40"></div>

        
        <div class="z-40">
            <h2 class="text-xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
            <h1 class="text-5xl playfair-display mb-2 drop-shadow-2xl textShadow">Dea & Sidik</h1>
            <h2 class="text-md  textShadow">Kamis, 27 Juni 2024</h2>

            <div class="h-[61vh]"></div>
            
            <div class="mb-5">
                <span class="text-lg font-light">Dear :</span>
                <div class="w-2/3 px-2 py-4 bg-primary-400 border-4 border-amber-700 rounded-2xl mx-auto">
                    <p class="text-lg font-semibold">{{ $tamu }}</p>
                </div>
            </div>
            
        </div>

    </section>


    <section id="main" class="w-full max-w-lg text-center h-screen relative grid place-items-center overflow-hidden relative mx-auto">
        <div class=" h-full w-full">
            <div class="w-full h-[15vh] bg-gradient-to-b from-primary-600 via-white/0 to-white/0 absolute"></div>
            <div style="background-image: url('/img/cover/2.jpg')" class="w-full h-[45vh] bg-cover bg-no-repeat bg-bottom"></div>

            <div class="text-center pt-14 bg-gradient-to-b from-primary-500 to-primary-100 h-full rounded-t-full  absolute w-[125%] left-1/2 -translate-x-1/2 top-[30%] z-20">
                <h2 class="text-2xl font-semibold sacramento-regular textShadow">The Wedding of</h2>
                <h1 class="text-5xl playfair-display my-2 drop-shadow-2xl textShadow">Dea & Sidik</h1>
                <h2 class="text-lg  textShadow">Kamis, 27 Juni 2024</h2>

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

    <section class="w-full max-w-lg bg-gradient-to-br from-primary-200 to-primary-700 px-10 py-5 mx-auto">
        <div class="w-full h-full bg-primary-50 rounded-lg text-center flex flex-col justify-center py-10 px-5 space-y-5">
            <p class="text-2xl">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم</p>
            <p class="text-sm">
                “Dan di antara tanda-tanda (kebesaran)-Nya adalah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.Sungguh pada yang demikian itu benar-benar terdapat tanda-tanda kebesaran Allah bagi kaum yang berpikir." 
            </p>
            <p class="text-md font-bold">- Q.S Ar-Rum : 21 -</p>
        </div>
    </section>

    <section class="w-full max-w-lg min-h-screen bg-gradient-to-r from-primary-300 to-primary-800 px-4 pb-20 pt-10 mx-auto">
            
            <div class="mb-5 text-center">
                <h3 class="sacramento-regular text-4xl font-bold">
                    We Are Getting Married
                </h3>
                <p class="text-sm mt-3">
                    Assalamu’alaikum Wr. Wb. Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, InsyaaAllah kami akan menyelenggarakan acara pernikahan :
                </p>
            </div>

            <div class="h-full w-full bg-primary-50 rounded-full text-center flex flex-col justify-center py-10">
                <div>
                    <div class="w-56 h-56 rounded-full bg-primary-500 p-3 mx-auto">
                        <div style="background-image: url('/img/profile/wahyu.jpg');" class="w-full h-full rounded-full bg-cover bg-center bg-no-repeat"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h2 class="great-vibes-regular text-black text-3xl">Sidik Sidik Hidayat</h2>
                        <div class="mt-1 text-sm font-medium">
                            <p>Putra dari Bapak Rasiman</p>
                            <p>Dan Ibu Umi</p>
                        </div>
                    </div>
                </div>
                <div class="flex my-5 px-6 items-center">
                    <div class="flex-1 border-b border-primary-700"></div>
                    <div class="great-vibes-regular text-3xl px-4 text-primary-700">&</div>
                    <div class="flex-1 border-b border-primary-700"></div>
                </div>
                <div>
                    <div class="w-56 h-56 rounded-full bg-primary-500 p-3 mx-auto">
                        <div style="background-image: url('/img/profile/dea.jpg');" class="w-full h-full rounded-full bg-cover bg-center bg-no-repeat"></div>
                    </div>
                    <div class="text-center mt-3">
                        <h2 class="great-vibes-regular text-black text-3xl">Dea Fitriani Sabila</h2>
                        <div class="mt-1 text-sm font-medium">
                            <p>Putra dari Bapak Suratno</p>
                            <p>Dan Ibu Lenny Witiastuti A.Md</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="w-full max-w-lg bg-gradient-to-l from-primary-50 to-primary-200 px-2 pb-20 pt-10 mx-auto">
            
            <div class="mb-5 text-center">
                <h3 class="great-vibes-regular text-4xl font-bold">
                    Save The Date
                </h3>
            </div>

            <div class="h-full w-full bg-primary-400 rounded-xl overflow-hidden pb-10 relative max-w-sm mx-auto">
                <div style="background-image: url('/img/cover/3.jpg')" class="h-72 bg-cover bg-no-repeat bg-bottom w-full"></div>
                <div class="absolute left-0 top-48 h-24 w-full bg-gradient-to-t from-primary-400 via-primary-400/25 to-white/0 z-30"></div>
                
                <div class="px-5 pt-5 flex space-x-4">
                    <div class="text-center flex-1">
                        <p>Jumat</p>
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
                            <p class="text-sm">Kediaman Mempelai Perempuan Kabupaten Purbalingga Provinsi Jawa Tengah</p>
                            <a href="" class="flex border w-fit pl-2.5 space-x-1 pr-3.5 py-1 rounded-xl items-center border-2 border-black text-sm bg-primary-700 hover:bg-primary-900 font-bold mt-2 mx-auto">
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
                            <div class="absolute w-[350%] text-center left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">Akad Nikah</div>
                        </div>
                    </div>

                </div>
            </div>
    </section>



    <section class="w-full max-w-lg bg-gradient-to-r from-primary-50 to-primary-200 px-2 pb-20 pt-10 mx-auto">
            
            <div class="mb-5 text-center">
                <h3 class="great-vibes-regular text-4xl font-bold">
                    Location Maps
                </h3>
            </div>

            <div class="h-full w-full bg-primary-600 rounded-xl overflow-hidden px-4 py-5 relative">
                <div class="relative rounded-lg">
                <iframe class="rounded-lg border-4 border-primary-200" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13744.69167288178!2d106.88626180586786!3d-6.365947168589222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1714958707747!5m2!1sid!2sid" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="text-center py-10">
                <a href="" class=" px-4 py-2 rounded bg-primary-600 font-bold text-primary-100 hover:bg-primary-500">Buka Lokasi</a>
            </div>
    </section>



    <section class="w-full max-w-lg bg-gradient-to-br from-primary-200 to-primary-700 px-10 py-5 mx-auto">
        <div class="w-full h-full bg-primary-50 rounded-lg text-center flex flex-col justify-center py-10 px-5 space-y-5">
            <div class="text-2xl great-vibes-regular">Love Stories</div>
            <p class="text-sm">
                “Dan di antara tanda-tanda (kebesaran)-Nya adalah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.Sungguh pada yang demikian itu benar-benar terdapat tanda-tanda kebesaran Allah bagi kaum yang berpikir." 
            </p>
        </div>
    </section>


    <section class="w-full max-w-lg bg-gradient-to-r from-primary-50 to-primary-200 px-2 pb-20 pt-10 mx-auto">
            
            <div class="mb-5 text-center">{{ $tamu }}
                <h3 class="great-vibes-regular text-4xl font-bold">
                    Wedding Gift
                </h3>
                <div class="flex justify-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                </div>

                <p class="pt-3 px-6">
                    Tanpa mengurangi rasa hormat, bagi Bapak/Ibu/Saudara/i yang ingin memberikan tanda kasih untuk kami, dapat melalui :
                </p>
            </div>

            <div class="text-center py-8">
                <button data-modal-target="progress-modal" data-modal-toggle="progress-modal" class=" px-4 py-2 rounded-lg border-2 border-primary-600 font-bold text-primary-700 shadow-xl hover:bg-primary-100">Tampilkan Rekening</button>
            </div>

            <div class="my-3 flex items-center px-3">
                <div class="border-b border-primary-600 flex-1"></div>
                <p class="px-1 text-primary-600 font-bold">~</p>
                <div class="border-b border-primary-600 flex-1"></div>
                <p class="px-1 text-primary-600 font-bold">~</p>
                <div class="border-b border-primary-600 flex-1"></div>
            </div>

            <div class="py-10">
                <h1 class="text-5xl text-center font-bold">RSVP</h1>
                <p class="text-center">
                    Mohon Bapak/Ibu/Saudara/i dapat mengisi Konfirmasi Kehadiran di bawah ini :
                </p>
            </div>

            <div class="pt-5 px-5 space-y-3">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Anda</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $tamu }}" value="{{ $tamu }}" />
                </div>
                
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat Anda</label>
                    <input type="text" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Alamat Anda" />
                </div>

                <div>
                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Tamu</label>
                    <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="4" />
                </div>
                
                <div class="space-y-2">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="hadir" name="konfirmasi" type="radio" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                        </div>
                        <label for="hadir" class="ms-2 text-sm font-medium text-gray-900">Ya, Saya Bersedia Hadir</label>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="tidak" name="konfirmasi" type="radio" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                        </div>
                        <label for="tidak" class="ms-2 text-sm font-medium text-gray-900">Maaf, Saya Tidak Bisa Hadir</label>
                    </div>
                </div>

                <div class="flex justify-center py-3">
                    <button class="flex items-center space-x-2 px-4 py-2 rounded-lg border-2 border-primary-600 font-bold text-primary-900 shadow-xl hover:bg-primary-100">
                       <span>Kirim Konfirmasi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                    </button>
                </div>

            </div>
            
            
    </section>


    <section class="w-full max-w-lg bg-gradient-to-br from-primary-200 to-primary-700 px-5 pt-8 pb-20 mx-auto">
        <div class="text-center">
            <h3 class="great-vibes-regular text-4xl font-bold">
                Wedding Wishes
            </h3>
            <p>Berikan Ucapan Dan Doa Restu</p>
        </div>

        <div class="bg-primary-100 p-4 rounded-lg mt-5 space-y-3">

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Anda</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $tamu }}" value="{{ $tamu }}" />
            </div>
            
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Ucapan</label>
                <textarea name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ucapan anda ..."></textarea>
            </div>

            <div class="flex space-x-2">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="hadir" name="konfirmasi" type="radio" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                    </div>
                    <label for="hadir" class="ms-2 text-sm font-medium text-gray-900">Hadir</label>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="tidak" name="konfirmasi" type="radio" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                    </div>
                    <label for="tidak" class="ms-2 text-sm font-medium text-gray-900">Tidak Hadir</label>
                </div>
            </div>

            <div class="flex justify-center py-3">
                    <button class="flex items-center space-x-2 px-4 py-2 rounded-lg border-2 border-primary-600 font-bold text-primary-700 shadow-xl hover:bg-primary-100">
                       <span>Kirim Ucapan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                    </button>
                </div>

            <div class=" pt-3 border-t border-primary-700  ">
                
                <div>
                    <div class="flex space-x-2 items-start">
                        <span class="great-vibes-regular text-5xl">"</span>
                        <span class="text-sm font-bold">{{ $tamu }}</span>
                        <span class="px-2 py-1 text-sm bg-primary-700 text-primary-100 rounded">Hadir</span>
                    </div>
                    <div class="flex text-sm space-x-1 items-center -mt-5 ml-5 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-xs underline">17 Jan 2024</span>
                    </div>
                    <div class="ml-5">
                        <p class="text-sm">
                            Happy wedding buat iky and calon suami, semoga acaranya lancar, khidmat, sawa dikaruniai keturunan yang Sholeh dan Sholehah, sementara lagi di luar kota (Bandung) jadi maaf kalau gak sempat hadir ya 🙏, next time ketemu buat ngafe and ngopi bareng😉
                        </p>
                    </div>
                    <div class="border-b w-3/4 mx-auto my-3 border-primary-600"></div>
                </div>


                <div>
                    <div class="flex space-x-2 items-start">
                        <span class="great-vibes-regular text-5xl">"</span>
                        <span class="text-sm font-bold">{{ $tamu }}</span>
                        <span class="px-2 py-1 text-sm bg-primary-700 text-primary-100 rounded">Hadir</span>
                    </div>
                    <div class="flex text-sm space-x-1 items-center -mt-5 ml-5 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-xs underline">17 Jan 2024</span>
                    </div>
                    <div class="ml-5">
                        <p class="text-sm">
                            Happy wedding buat iky and calon suami, semoga acaranya lancar, khidmat, sawa dikaruniai keturunan yang Sholeh dan Sholehah, sementara lagi di luar kota (Bandung) jadi maaf kalau gak sempat hadir ya 🙏, next time ketemu buat ngafe and ngopi bareng😉
                        </p>
                    </div>
                    <div class="border-b w-3/4 mx-auto my-3 border-primary-600"></div>
                </div>


                <div>
                    <div class="flex space-x-2 items-start">
                        <span class="great-vibes-regular text-5xl">"</span>
                        <span class="text-sm font-bold">{{ $tamu }}</span>
                        <span class="px-2 py-1 text-sm bg-primary-700 text-primary-100 rounded">Hadir</span>
                    </div>
                    <div class="flex text-sm space-x-1 items-center -mt-5 ml-5 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-xs underline">17 Jan 2024</span>
                    </div>
                    <div class="ml-5">
                        <p class="text-sm">
                            Happy wedding buat iky and calon suami, semoga acaranya lancar, khidmat, sawa dikaruniai keturunan yang Sholeh dan Sholehah, sementara lagi di luar kota (Bandung) jadi maaf kalau gak sempat hadir ya 🙏, next time ketemu buat ngafe and ngopi bareng😉
                        </p>
                    </div>
                    <div class="border-b w-3/4 mx-auto my-3 border-primary-600"></div>
                </div>

                <div>
                    <div class="flex space-x-2 items-start">
                        <span class="great-vibes-regular text-5xl">"</span>
                        <span class="text-sm font-bold">{{ $tamu }}</span>
                        <span class="px-2 py-1 text-sm bg-primary-700 text-primary-100 rounded">Hadir</span>
                    </div>
                    <div class="flex text-sm space-x-1 items-center -mt-5 ml-5 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-xs underline">17 Jan 2024</span>
                    </div>
                    <div class="ml-5">
                        <p class="text-sm">
                            Happy wedding buat iky and calon suami, semoga acaranya lancar, khidmat, sawa dikaruniai keturunan yang Sholeh dan Sholehah, sementara lagi di luar kota (Bandung) jadi maaf kalau gak sempat hadir ya 🙏, next time ketemu buat ngafe and ngopi bareng😉
                        </p>
                    </div>
                    <div class="border-b w-3/4 mx-auto my-3 border-primary-600"></div>
                </div>

                    

                
            </div>

        </div>


        <div class="text-center py-16">
            <h3 class="great-vibes-regular text-4xl font-bold">
                Sidik & Dea
            </h3>
            <p>
                Atas kehadiran dan doa restunya kami ucapkan terimakasih
            </p>
        </div>

        
    </section>

</main>




<div id="progress-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-primary-100 rounded-lg shadow ">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="progress-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5">
                <div class="px-2 py-4 bg-primary-200 shadow rounded-md">

                    <img class="w-1/2 mx-auto py-4" src="/img/rek/bca.png" alt="">
                    
                    <div class="w-full max-w-sm">

                        <div class="flex items-center">
                        <span class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg">Norek</span>
                        <div class="relative w-full">
                            <input id="website-url" type="text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-e-0 border-gray-300 text-gray-500 text-sm border-s-0 focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " value="3580553248" readonly disabled />
                        </div>
                        <button data-tooltip-target="tooltip-website-url" data-copy-to-clipboard-target="website-url" class="flex-shrink-0 z-10 inline-flex items-center py-3 px-4 text-sm font-medium text-center text-white bg-primary-700 rounded-e-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 " type="button">
                            <span id="default-icon">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                                </svg>
                            </span>
                            <span id="success-icon" class="hidden inline-flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                            </span>
                        </button>
                        <div id="tooltip-website-url" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                            <span id="default-tooltip-message">Copy link</span>
                            <span id="success-tooltip-message" class="hidden">Copied!</span>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <p id="helper-text-explanation" class="mt-2 ml-2 text-sm text-gray-500 ">An. SIDIK Sidik HIDAYAT</p>
                </div>
            </div>

                <div class="flex items-center my-4">
                    <div class="flex-1 border-b border-primary-600"></div>
                    <div class="px-3 italic text-primary-600">or</div>
                    <div class="flex-1 border-b border-primary-600"></div>
                </div>

            <div class="px-2 py-4 bg-primary-200 shadow rounded-md">

                <img class="w-1/2 mx-auto py-4" src="/img/rek/bca.png" alt="">
                
                <div class="w-full max-w-sm">
                    
                    <div class="flex items-center">
                        <span class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg">Norek</span>
                        <div class="relative w-full">
                            <input id="website-url22" type="text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-e-0 border-gray-300 text-gray-500 text-sm border-s-0 focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " value="0971084200" readonly disabled />
                        </div>
                        <button data-tooltip-target="tooltip-website-url22" data-copy-to-clipboard-target="website-url22" class="flex-shrink-0 z-10 inline-flex items-center py-3 px-4 text-sm font-medium text-center text-white bg-primary-700 rounded-e-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 border border-primary-700 hover:border-primary-800" type="button">
                            <span id="default-icon">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                                </svg>
                            </span>
                            <span id="success-icon" class="hidden inline-flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                            </span>
                        </button>
                        <div id="tooltip-website-url22" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                            <span id="default-tooltip-message">Copy link</span>
                            <span id="success-tooltip-message" class="hidden">Copied!</span>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500">An. DEA FITRIANI SABILA</p>
                </div>
            </div>
                

                <div class="flex items-center my-4">
                    <div class="flex-1 border-b border-primary-600"></div>
                    <div class="px-3 italic text-primary-600">or</div>
                    <div class="flex-1 border-b border-primary-600"></div>
                </div>

            <div class="px-2 py-4 bg-primary-200 shadow rounded-md">

                <div class="mt-5 mb-2 text-center">
                    <p>Kirim Hadiah</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                </div>
                                
                <div class="w-full max-w-sm">

                    <div class="flex items-center">
                        <span class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg">Alamat</span>
                        <div class="relative w-full">
                            <input id="alamat-url22" type="text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-e-0 border-gray-300 text-gray-500 text-sm border-s-0 focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " value="Jl Nasnajshaj jhdbajhsd asjhdbjahs " readonly disabled />
                        </div>
                        <button data-tooltip-target="tooltip-alamat-url22" data-copy-to-clipboard-target="alamat-url22" class="flex-shrink-0 z-10 inline-flex items-center py-3 px-4 text-sm font-medium text-center text-white bg-primary-700 rounded-e-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 border border-primary-700 hover:border-primary-800" type="button">
                            <span id="default-icon">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                                </svg>
                            </span>
                            <span id="success-icon" class="hidden inline-flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                            </span>
                        </button>
                        <div id="tooltip-alamat-url22" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                            <span id="default-tooltip-message">Copy link</span>
                            <span id="success-tooltip-message" class="hidden">Copied!</span>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    
                </div>
            </div>
                

                <!-- Modal footer -->
                <div class="flex items-center justify-center mt-8 space-x-4 rtl:space-x-reverse">
                    <button data-modal-hide="progress-modal" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Konfirmasi Lewat WhatsApp</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-xl font-semibold text-gray-900">
                    Konfirmasi Transfer
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="{{ $tamu }}" value="{{ $tamu }}" />
                    </div>
                    <div>
                        <input type="text" name="nominal" id="nominal" placeholder="Nominal Transfer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" />
                    </div>
                    <div class="">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="via-1" name="via" type="radio" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required />
                            </div>
                            <label for="via-1" class="ms-2 text-sm font-medium text-gray-900">BCA</label>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="via-2" name="via" type="radio" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required />
                            </div>
                            <label for="via-2" class="ms-2 text-sm font-medium text-gray-900">BRI</label>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Konfirmasi Lewat WhatsApp</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- BOOTOM NAVIGATION -->
<div class="fixed z-40 w-full h-16 max-w-lg -translate-x-1/2 bg-primary-600 border border-gray-100 rounded-full bottom-4 left-1/2">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
        
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center rounded-full hover:bg-gray-50 group">
            
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-primary-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            
            <span class="sr-only">Home</span>
        </button>

        <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
        <button data-tooltip-target="tooltip-wallet" type="button" class="inline-flex flex-col rounded-full items-center justify-center hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-primary-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="sr-only">Wallet</span>
        </button>
        <div id="tooltip-wallet" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
            Wallet
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>


        <button data-tooltip-target="tooltip-center" type="button" class="inline-flex flex-col rounded-full items-center justify-center hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-primary-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="sr-only">Center</span>
        </button>
        <div id="tooltip-center" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
            Center
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
        
        
        <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col rounded-full items-center justify-center hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-primary-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
            </svg>
            <span class="sr-only">Settings</span>
        </button>
        <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
            Settings
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
        <button data-tooltip-target="tooltip-profile" type="button" class="inline-flex flex-col items-center justify-center rounded-full hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-1 text-gray-100  group-hover:text-primary-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
            <span class="sr-only">Profile</span>
        </button>
        <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
            Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    
    </div>
</div>


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
                
    </body>
</html>
