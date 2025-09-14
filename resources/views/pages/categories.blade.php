<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    @foreach ($genres as $genre)
        <div>
            <h2>{{ $genre->name }}</h2>
            <p>{{ $genre->description }}</p>
        </div>
    @endforeach


    {{-- Hapus nanti --}}
    <div class="grid grid-cols-3 gap-6 p-6">
        <!-- Card -->
        <div class="relative group rounded-2xl overflow-hidden shadow-lg h-48 flex items-center justify-center">
            <!-- Background image -->
            <div
                class="absolute inset-0 bg-[url('https://unsplash.com/photos/blurry-cityscape-with-red-light-and-street-lights-at-night-oKyZoJy03ZA')] bg-cover bg-center opacity-40 group-hover:opacity-0 transition duration-500">
            </div>

            <!-- Solid background muncul saat hover -->
            <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-100 transition duration-500"></div>

            <!-- Text -->
            <h2 class="relative text-white text-2xl font-bold z-10">
                Technology
            </h2>
        </div>

        <!-- Card lain -->
        <div class="relative group rounded-2xl overflow-hidden shadow-lg h-48 flex items-center justify-center">
            <div
                class="absolute inset-0 bg-[url('https://source.unsplash.com/400x300/?travel')] bg-cover bg-center opacity-40 group-hover:opacity-0 transition duration-500">
            </div>
            <div class="absolute inset-0 bg-green-600 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            <h2 class="relative text-white text-2xl font-bold z-10">
                Travel
            </h2>
        </div>

        <div class="relative group rounded-2xl overflow-hidden shadow-lg h-48 flex items-center justify-center">
            <div
                class="absolute inset-0 bg-[url('https://source.unsplash.com/400x300/?food')] bg-cover bg-center opacity-40 group-hover:opacity-0 transition duration-500">
            </div>
            <div class="absolute inset-0 bg-red-600 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            <h2 class="relative text-white text-2xl font-bold z-10">
                Food
            </h2>
        </div>
    </div>
</x-layout>
