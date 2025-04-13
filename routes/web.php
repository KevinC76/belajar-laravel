<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'kevin chiputra']);
});

Route::get('/posts', function () {
    $post = Post::latest();

    // dump(request('search'));
    if (request('search')) {
        $post->where('title', 'like', '%' . request('search') . '%');
    }

    // eager loading
    // $posts = Post::with(['author', 'category'])->latest()->get();
    return view('posts', ['title' => 'Blog Page', 'posts' => $post->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // eager lazy loading
    // $posts = $user->posts->load('category', 'author');


    return view('posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:category_name}', function (Category $category) {
    // eager lazy loading
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Article with category ' . $category->category_name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
