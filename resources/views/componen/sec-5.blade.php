<section class="w-full max-w-lg bg-gradient-to-r from-primary-50 to-primary-200 px-2 pb-20 pt-10 mx-auto">
    <div class="mb-5 text-center">
        <h3 class="great-vibes-regular text-4xl font-bold">
            Location Maps
        </h3>
    </div>

    <div class="fade-in h-full w-full bg-primary-600 rounded-xl overflow-hidden px-4 py-5 relative">
        <div class="relative rounded-lg">
        <iframe class="rounded-lg border-4 border-primary-200" src="{{ $maps }}" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="text-center py-10">
        <a href="{{ $button }}" target="_blank" class=" px-4 py-2 rounded bg-primary-600 font-bold text-primary-100 hover:bg-primary-500">Buka Lokasi</a>
    </div>
</section>