<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/blog', function (){
    return view('blog', [
        "title" => "blog",
    ]);
});

Route::get('/post', function (){
    $blog_post = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "jelang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt architecto eius sapiente, maiores nesciunt fugit inventore a commodi reiciendis aliquam ut facilis. Dignissimos maiores dolore optio quo! Eum, quis?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ahmad",
            "body" => "Lorem ipsum dolor sit amet reiciendis aliquam ut facilis. Dignissimos maiores dolore optio quo! Eum, quis?"
        ],
    ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_post
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "jelang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt architecto eius sapiente, maiores nesciunt fugit inventore a commodi reiciendis aliquam ut facilis. Dignissimos maiores dolore optio quo! Eum, quis?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ahmad",
            "body" => "Lorem ipsum dolor sit amet reiciendis aliquam ut facilis. Dignissimos maiores dolore optio quo! Eum, quis?"
        ],
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single Post",
        "post" => $new_post
    ]);
});
