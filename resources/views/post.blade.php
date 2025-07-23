<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    <article class="py-8 max-w-screen-md ">

        <h2 class="mb-1 text-3-xl tracking-tight text-gray-900 font-bold">{{ $post['title'] }}</h2>

        <div class="text-base text-gray-600">
            <a href="#">{{ $post['author'] }}</a> | Tanggal Publish: 1 Januari 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-600 hover:text-blue-500">Back To Blog
            &laquo;</a>
    </article>
</x-layout>
