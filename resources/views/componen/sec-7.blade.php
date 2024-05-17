<!-- UCAPAN FORM -->

<section id="ucapan" class="w-full max-w-lg bg-gradient-to-br from-primary-200 to-primary-700 px-5 pt-8 pb-20 mx-auto">
    <div class="text-center">
        <h3 class="great-vibes-regular text-4xl font-bold">
            Wedding Wishes
        </h3>
        <p>Berikan Ucapan Dan Doa Restu</p>
    </div>

    <div class="bg-primary-100 p-4 rounded-lg mt-5 space-y-3">

    <form action="/ucapan" method="post" class="w-full">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Anda</label>
            <input type="text" name="nama" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $tamu }}" value="{{ $tamu }}" />
        </div>
        
        <div>
            <label for="ucapan" class="block mb-2 text-sm font-medium text-gray-900">Ucapan</label>
            <textarea name="ucapan" id="ucapan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ucapan anda ..."></textarea>
        </div>

        <div class="flex space-x-2">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="ya-hadir" name="konfirmasi" type="radio" value="Hadir" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                </div>
                <label for="ya-hadir" class="ms-2 text-sm font-medium text-gray-900">Hadir</label>
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="tidak-hadir" name="konfirmasi" type="radio" value="Tidak Hadir" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                </div>
                <label for="tidak-hadir" class="ms-2 text-sm font-medium text-gray-900">Tidak Hadir</label>
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
    </form>

        <div class=" pt-3 border-t border-primary-700  ">

        @foreach($ucapan as $ucap)
            <div>
                <div class="flex space-x-2 items-start">
                    <span class="space-grotesk text-5xl">"</span>
                    <div class="flex space-x-2 items-center">
                        <span class="text-sm font-bold">{{ $ucap->nama }}</span>
                        <span class="px-2 py-1 text-sm bg-primary-700 text-black rounded">{{ $ucap->konfirmasi }}</span>
                    </div>
                </div>
                <div class="flex text-sm space-x-1 items-center -mt-5 ml-5 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-xs underline">{{ $ucap->created_at }}</span>
                </div>
                <div class="ml-5">
                    <p class="text-sm">
                        {{ $ucap->ucapan }}
                    </p>
                </div>
                <div class="border-b w-3/4 mx-auto my-3 border-primary-600"></div>
            </div>
        @endforeach

        </div>
    </div>


    <div class="text-center py-16">
        <h3 class="playfair-display text-4xl font-bold">
            Sidik & Dea
        </h3>
        <p>
            Atas kehadiran dan doa restunya kami ucapkan terimakasih
        </p>
    </div>

    
</section>