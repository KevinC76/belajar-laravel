<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">

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
    </article> --}}


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format text-xs">
                    <a href="/posts" class="font-medium text-blue-600">&laquo; Back to all posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $post->author->name }}">
                            <div>
                                <a href="/posts?author={{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                    {{ $post->created_at->format('j F Y') }}</p>
                                <a href="/posts?category={{ $post->category->category_name }}"
                                    class="bg-{{ $post->category->color }}-100 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $post->category->category_name }}
                                </a>

                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p>{{ $post->body }}</p>
            </article>
        </div>
    </main>


</x-layout>
