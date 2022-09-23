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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Hafizd Mahardhika",
        "email" => "hafidz.mahardika236@gmail.com",
        "alamat" => "Jakarta"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "by" => "Hafizd M",
            "post" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, culpa. Laudantium impedit quia suscipit laboriosam totam animi sed eos. Veritatis facilis quaerat accusantium fugiat hic eos excepturi. Consequatur fuga totam ipsam unde nobis ducimus voluptatem ex sed delectus earum itaque laborum deserunt nihil vel exercitationem, vero quo odit! Necessitatibus possimus nobis, suscipit quos enim blanditiis maxime aspernatur officia. Doloremque quae obcaecati porro illum, eos numquam ducimus mollitia aperiam, blanditiis temporibus natus assumenda debitis quisquam. Ad aspernatur soluta maxime tenetur praesentium!"
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "by" => "Faris Yukla R.M",
            "post" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti itaque ex quia tempora officia ducimus modi iure tenetur dolorem, consectetur repellat voluptate exercitationem magnam accusantium odio eaque, esse illum dignissimos adipisci quos voluptatibus dolorum, explicabo earum vel. Blanditiis libero assumenda aliquam dolore voluptatibus necessitatibus fugit vero quisquam ipsum repudiandae in, facere laudantium cumque optio praesentium architecto? Quas ea dolorum alias, iste ipsum temporibus consequatur inventore. Cumque, recusandae obcaecati. Sit enim possimus ipsam, nostrum ipsa cupiditate optio aut voluptatem debitis non rem iure, in corporis illo, cum excepturi ipsum reiciendis facilis laudantium culpa? Accusantium quidem deserunt sed possimus obcaecati eum incidunt fugit necessitatibus quos saepe quisquam eos officia, hic autem? Fuga rerum, tempora ducimus debitis earum tenetur excepturi beatae, qui vel similique placeat quibusdam optio doloribus corporis cupiditate molestias nostrum ea sequi velit eos sed provident fugiat. Quo eaque pariatur quae, itaque doloremque soluta odio dicta alias, veniam distinctio similique! Itaque."
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

//Single Post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "by" => "Hafizd M",
            "post" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, culpa. Laudantium impedit quia suscipit laboriosam totam animi sed eos. Veritatis facilis quaerat accusantium fugiat hic eos excepturi. Consequatur fuga totam ipsam unde nobis ducimus voluptatem ex sed delectus earum itaque laborum deserunt nihil vel exercitationem, vero quo odit! Necessitatibus possimus nobis, suscipit quos enim blanditiis maxime aspernatur officia. Doloremque quae obcaecati porro illum, eos numquam ducimus mollitia aperiam, blanditiis temporibus natus assumenda debitis quisquam. Ad aspernatur soluta maxime tenetur praesentium!"
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "by" => "Faris Yukla R.M",
            "post" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti itaque ex quia tempora officia ducimus modi iure tenetur dolorem, consectetur repellat voluptate exercitationem magnam accusantium odio eaque, esse illum dignissimos adipisci quos voluptatibus dolorum, explicabo earum vel. Blanditiis libero assumenda aliquam dolore voluptatibus necessitatibus fugit vero quisquam ipsum repudiandae in, facere laudantium cumque optio praesentium architecto? Quas ea dolorum alias, iste ipsum temporibus consequatur inventore. Cumque, recusandae obcaecati. Sit enim possimus ipsam, nostrum ipsa cupiditate optio aut voluptatem debitis non rem iure, in corporis illo, cum excepturi ipsum reiciendis facilis laudantium culpa? Accusantium quidem deserunt sed possimus obcaecati eum incidunt fugit necessitatibus quos saepe quisquam eos officia, hic autem? Fuga rerum, tempora ducimus debitis earum tenetur excepturi beatae, qui vel similique placeat quibusdam optio doloribus corporis cupiditate molestias nostrum ea sequi velit eos sed provident fugiat. Quo eaque pariatur quae, itaque doloremque soluta odio dicta alias, veniam distinctio similique! Itaque."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    };

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
