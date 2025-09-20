<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    @foreach ($posts as $post)
        <article class="py-6 max-w-screen-md mx-auto border-b border-gray-200">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3-xl tracking-tight text-gray-900 font-bold">{{ $post['title'] }}</h2>

            </a>
            <div class="text-base text-gray-600">
                <a href="#">{{ $post['author'] }}</a> | Tanggal Publish: 1 Januari 2025
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-600 hover:text-blue-500">Baca Selengkapnya
                &raquo;</a>
        </article>
    @endforeach
    {{ $posts->links() }}
</x-layout>
