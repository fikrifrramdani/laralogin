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
    "title" => "Home"
  ]);
});

Route::get('/about', function () {
  return view('about', [
    "title" => "About",
    "name" => "Fikri Ramdani",
    "email" => "fikriramdani@mainoffice.com",
    "image" => "1.png"
  ]);
});

Route::get('/blog', function () {
  $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Fikri Ramdani",
      "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam?"
    ],

    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Fikri Ramdani",
      "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam?"
    ]
  ];
  return view('posts', [
    "title" => "Blog",
    "posts" => $blog_posts
  ]);
});

// halaman single posts
Route::get('posts/{slug}', function ($slug) {
  $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Fikri Ramdani",
      "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam?"
    ],

    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Fikri Ramdani",
      "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, delectus alias nostrum aut odio temporibus, eum, natus
            recusandae quam modi dolore rerum esse numquam in repudiandae perferendis accusamus minima totam?"
    ]
  ];

  $new_post = [];
  foreach ($blog_posts as $post) {
    if ($post["slug"] == $slug) {
      $new_post = $post;
    }
  }

  return view('post', [
    "title" => "Single post",
    "post" => $new_post
  ]);
});
