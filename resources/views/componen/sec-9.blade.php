<!-- KONFIRMASI TRANSFER -->

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
                        <input type="text" name="nama" id="nama_" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="{{ $tamu }}" value="{{ $tamu }}" />
                    </div>
                    <div>
                        <input type="text" name="nominal" id="nominal" placeholder="Nominal Transfer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" />
                    </div>
                    <div class="pb-10">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="via-1" name="via" type="checkbox" value="BCA Sidik" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required />
                            </div>
                            <label for="via-1" class="ms-2 text-sm font-medium text-gray-900">BCA - Sidik</label>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="via-2" name="via" type="checkbox" value="BCA Dea" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required />
                            </div>
                            <label for="via-2" class="ms-2 text-sm font-medium text-gray-900">BCA - Dea</label>
                        </div>
                    </div>
                    <a href="#" target="_blank" id="send_confirmation2" class="w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Konfirmasi Lewat WhatsApp</a>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // Ambil referensi elemen-elemen input
    var nama_Input = document.getElementById("nama_");
    var nominalInput = document.getElementById("nominal");
    var via1Input = document.getElementById("via-1");
    var via2Input = document.getElementById("via-2");
    
    // Ganti URL ketika nilai input berubah
    nama_Input.addEventListener("input", updateUrl);
    nominalInput.addEventListener("input", updateUrl);
    via1Input.addEventListener("input", updateUrl);
    via2Input.addEventListener("input", updateUrl);
    
    function updateUrl() {
        var nama_ = nama_Input.value.trim();
        var nominal = nominalInput.value.trim();
        var via1 = via1Input.value.trim();
        var via2 = via2Input.value.trim();
    
        // Bangun URL berdasarkan input pengguna
        var url = "https://wa.me/6281225145161?text=";
        url += encodeURIComponent("Tidak sabar untuk berbagi dalam kebahagiaan kalian! Kami transfer sumbangan kami sebagai tanda dukungan dan doa terbaik untuk perjalanan indah kalian berdua. Semoga cinta dan kebahagiaan senantiasa menyertai langkah-langkah kalian menuju masa depan yang penuh berkat. Terima kasih telah memperbolehkan kami menjadi bagian dari momen bersejarah ini\n\n*Dari : " + nama_ + "*\nJumlah : Rp." + nominal + "\nKe Rekening : "+ via1 +", "+ via2);
        // Tetapkan URL baru ke href
        document.getElementById("send_confirmation2").href = url;
    }
</script>