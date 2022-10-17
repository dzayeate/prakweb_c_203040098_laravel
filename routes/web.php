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
        "name" => "Agam",
        "email" => "agamatmaja772@gmail.com",
        "image" => "Agam.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Agam",
        "email" => "agamatmaja772@gmail.com",
        "image" => "Agam.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "name" => "Agam",
        "email" => "agamatmaja772@gmail.com",
        "image" => "Agam.jpg"
    ]);
});
