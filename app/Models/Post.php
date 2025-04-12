<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
    }

    public static function find($slug): array{
        // function biasa
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // arrow function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(!$post){
            // page 404
            abort(404);
        }

        return $post;
    }
}
