<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
        "title" => "Home",
        "active" => "home",
    ]);
});

    Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Agam Ramdhan Kamil Atmaja",
        "email" => "agamatmaja772@gmail.com",
        "image" => "Agam.jpg"
    ]);
});



    Route::get('/blog', [PostController::class, 'index']);
    Route::get('posts/{post:slug}', [PostController::class, 'show']);


    Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all(),
    ]);
});

    Route::get('/categories/{category:slug}', function (Category $category) {
        return view('posts', [
            'title' => "Post by category : $category->name",
            'posts' => $category->posts->load('category', 'author'),
    ]);

        Route::get('/authors/{author:username}', function (User $author) {
            return view('post',[
                'title' => "Post by author : $author->name",
                'posts' => $author->posts->load('category', 'author'),
            ]);
        });

});
