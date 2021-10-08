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
        "name" => "Rifqi Muliawan",
        "email" => "muliawan027@gmail.com",
        "image" => "profile.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifqi Muliawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fugiat soluta omnis error adipisci consectetur earum, esse
            odit quam sunt tempore accusamus beatae in? Officia natus autem, 
            cum praesentium quod et explicabo, deserunt debitis nisi sapiente earum aliquid, 
            voluptatibus sed quasi odio tenetur excepturi ab quas illo. Sint corporis nisi accusantium ad 
            rerum consequatur vel necessitatibus obcaecati omnis quam, atque error nemo non,
            perferendis cumque vitae dolorem labore sequi soluta blanditiis iure. 
            Dicta quidem laborum ea nulla accusantium culpa animi perferendis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kevin Fredrian Syach",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ut atque obcaecati consequuntur, 
            corrupti reprehenderit eveniet corporis. Corrupti eveniet, nesciunt error vitae, suscipit quas adipisci, 
            distinctio fugiat sunt consectetur ratione ut voluptatum eaque tempora. Numquam delectus vitae doloremque reprehenderit. 
            Quas accusamus aut soluta officia totam illo itaque, eos quasi eveniet! Qui totam amet alias repudiandae quibusdam odio cumque, 
            ipsam inventore deleniti magnam saepe rem delectus eos ad exercitationem architecto quasi facere soluta. 
            Eos, ipsa exercitationem molestiae cum maxime amet nisi eaque quae! Ducimus explicabo a corrupti mollitia. 
            Velit maiores commodi temporibus quae totam vitae tempore architecto. Illum cumque laborum voluptatum."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifqi Muliawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Fugiat soluta omnis error adipisci consectetur earum, esse
            odit quam sunt tempore accusamus beatae in? Officia natus autem, 
            cum praesentium quod et explicabo, deserunt debitis nisi sapiente earum aliquid, 
            voluptatibus sed quasi odio tenetur excepturi ab quas illo. Sint corporis nisi accusantium ad 
            rerum consequatur vel necessitatibus obcaecati omnis quam, atque error nemo non,
            perferendis cumque vitae dolorem labore sequi soluta blanditiis iure. 
            Dicta quidem laborum ea nulla accusantium culpa animi perferendis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kevin Fredrian Syach",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ut atque obcaecati consequuntur, 
            corrupti reprehenderit eveniet corporis. Corrupti eveniet, nesciunt error vitae, suscipit quas adipisci, 
            distinctio fugiat sunt consectetur ratione ut voluptatum eaque tempora. Numquam delectus vitae doloremque reprehenderit. 
            Quas accusamus aut soluta officia totam illo itaque, eos quasi eveniet! Qui totam amet alias repudiandae quibusdam odio cumque, 
            ipsam inventore deleniti magnam saepe rem delectus eos ad exercitationem architecto quasi facere soluta. 
            Eos, ipsa exercitationem molestiae cum maxime amet nisi eaque quae! Ducimus explicabo a corrupti mollitia. 
            Velit maiores commodi temporibus quae totam vitae tempore architecto. Illum cumque laborum voluptatum."
        ],
    ];

    $new_post =[];
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