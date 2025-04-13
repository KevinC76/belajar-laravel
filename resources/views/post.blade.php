<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <div>
            By
            <a href="/authors/{{ $post->author->username }}"
                class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> | <a
                href="/category/{{ $post->category->category_name }}"
                class="hover:underline text-base text-gray-500">{{ $post->category->category_name }}</a> |
            {{ $post->created_at->format('j F Y') }} 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to Posts &laquo;</a>
    </article>


</x-layout>
