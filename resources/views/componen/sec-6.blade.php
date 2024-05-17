<section class="w-full max-w-lg bg-gradient-to-br from-primary-200 to-primary-700 px-10 py-5 mx-auto">
    <div class="w-full h-full bg-primary-50 rounded-lg text-center flex flex-col justify-center py-10 px-5 space-y-5">
        <div class="text-2xl great-vibes-regular">Love Stories</div>
        <p class="text-sm">
            “Dan di antara tanda-tanda (kebesaran)-Nya adalah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.Sungguh pada yang demikian itu benar-benar terdapat tanda-tanda kebesaran Allah bagi kaum yang berpikir." 
        </p>
    </div>
</section>


<section id="wallet" class="w-full max-w-lg bg-gradient-to-r from-primary-50 to-primary-200 px-2 pb-20 pt-10 mx-auto">
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
            <a id="send_confirmation" href="#" target="_blank" class="flex items-center space-x-2 px-4 py-2 rounded-lg border-2 border-primary-600 font-bold text-primary-900 shadow-xl hover:bg-primary-100">
                <span>Kirim Konfirmasi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
            </a>
        </div>

    </div>
</section>


<script>
    var nameInput = document.getElementById("name");
    var alamatInput = document.getElementById("alamat");
    var jumlahInput = document.getElementById("jumlah");
    var hadirInput = document.getElementById("hadir");
    var tidakInput = document.getElementById("tidak");
    
    nameInput.addEventListener("input", updateUrl);
    alamatInput.addEventListener("input", updateUrl);
    jumlahInput.addEventListener("input", updateUrl);
    hadirInput.addEventListener("input", updateUrl);
    tidakInput.addEventListener("input", updateUrl);

    function updateUrl() {
        var name = nameInput.value.trim();
        var alamat = alamatInput.value.trim();
        var jumlah = jumlahInput.value.trim();
        var hadir = hadirInput.value.trim();
        var tidak = tidakInput.value.trim();
        var url = "https://wa.me/6281225145161?text=";
        url += encodeURIComponent("Dengan penuh kebahagiaan,\nkami merespons undangan pernikahan yang disampaikan dengan penuh kasih oleh {{ $nama1 }}.\n\nKami, " + name + " dan segenap keluarga dengan jumlah " + jumlah + ", dari "+ alamat +", dengan rendah hati akan hadir dalam momen bersejarah ini. Kami berdoa semoga cinta dan kebahagiaan senantiasa menyertai langkah kalian.,\ndan kami tak sabar untuk bersama-sama merayakan kebahagiaan ini di {{ $tempat }}.\n\nTerima kasih atas kehormatan yang diberikan melalui undangan ini");
        document.getElementById("send_confirmation").href = url;
    }
</script>