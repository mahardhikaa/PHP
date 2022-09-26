<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Posts;
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

Route::get('/blog', [PostController::class, 'index']); //Post Blog
Route::get('posts/{post:slug}', [PostController::class, 'show']); //Single Post

Route::get('/categories', [CategoryController::class, 'index']); //List category
Route::get('/categories/{category:slug}', [CategoryController::class, 'category_post']); //List post with category
