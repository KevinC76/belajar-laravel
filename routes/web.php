<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'kevin chiputra']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul 1',
            'author' => 'kevin c',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit modi, iusto
            sint vero incidunt maxime
            nam perspiciatis deserunt sit!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul 2',
            'author' => 'kevin c',
            'body' => 'sint vero incidunt maxime nam perspiciatis deserunt sit!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul 1',
            'author' => 'kevin c',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit modi, iusto
            sint vero incidunt maxime
            nam perspiciatis deserunt sit!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul 2',
            'author' => 'kevin c',
            'body' => 'sint vero incidunt maxime nam perspiciatis deserunt sit!'
        ]
        ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Page']);
});
