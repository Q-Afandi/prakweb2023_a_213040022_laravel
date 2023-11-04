<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
        "name" => "Osas",
        "email" => "Osas@gmail.com",
        "image" => "osas.jpg"
    ]);
});





Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul Post Pertamaa",
            "slug" => "judul-post-pertama",
            "author" => "Osas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate."
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "jajang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate."
        ]
    ];



    return view('posts', [

        
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "judul Post Pertamaa",
            "slug" => "judul-post-pertama",
            "author" => "Osas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate."
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "jajang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Enim corrupti optio voluptate voluptates est culpa quia 
            eum nihil nisi aut error nobis odio dolorum accusantium ad, 
            sapiente expedita aliquid cupiditate."
        ]
    ];
$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});