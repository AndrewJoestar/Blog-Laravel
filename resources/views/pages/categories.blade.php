<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    <div class="grid grid-cols-3 gap-6 p-6">
        @foreach ($genres as $genre)
            <!-- Card -->
            <div class="relative group rounded-2xl overflow-hidden shadow-lg h-48 flex items-center justify-center">
                <a href="/categories/{{ $genre['slug'] }}">

                    <div class="absolute inset-0 bg-cover bg-center opacity-100 group-hover:opacity-0 transition duration-500"
                        style="background-image: {{ "url('{$genre->image_url}')" }};">
                    </div>

                    <div class="absolute inset-0  bg-center opacity-0 group-hover:opacity-50 transition duration-500"
                        style="background-image: {{ "url('{$genre->image_url}')" }};">
                    </div>

                    <h2 class="relative text-white text-2xl font-bold z-10">
                        {{ $genre->name }}
                    </h2>
                </a>
            </div>
        @endforeach
    </div>



</x-layout>
