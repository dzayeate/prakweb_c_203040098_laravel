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
        "name" => "Agam",
        "email" => "agamatmaja772@gmail.com",
        "image" => "Agam.jpg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agam Ramdhan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error excepturi sint quisquam suscipit reiciendis eveniet delectus nam. Eius similique aspernatur harum voluptatum assumenda ad nihil soluta quasi, fugit doloremque? Quam nobis recusandae dolorem odit sit numquam incidunt quae! Accusamus, cupiditate quaerat odit, blanditiis nulla expedita praesentium nobis nostrum, accusantium explicabo ducimus impedit neque aspernatur? Dolores distinctio et modi voluptatum velit ut accusantium tempore? Nulla, optio? Accusantium earum ratione quas quasi. Veniam dolorum, sapiente odio necessitatibus iusto omnis facere dicta adipisci."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Atmaja Kamil",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque optio rerum necessitatibus cum ex sint adipisci dolor, ea explicabo id nobis nulla ullam veritatis minima numquam, tempore ratione quae aut. Repellendus, amet necessitatibus eaque nostrum ipsa a reiciendis ut facilis quidem doloremque sapiente dolor tenetur quibusdam saepe dolorem. Porro laboriosam odit dolor ullam. Mollitia earum perspiciatis sapiente, nihil fugit quas minus maxime dolor iusto? Eum commodi, quia inventore veniam, in, adipisci molestiae eveniet minus recusandae tempore necessitatibus aliquam odio totam similique reiciendis provident sed. Minima obcaecati soluta id, aspernatur deleniti veniam ut tenetur inventore nobis explicabo. Distinctio eos dolore qui."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agam Ramdhan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error excepturi sint quisquam suscipit reiciendis eveniet delectus nam. Eius similique aspernatur harum voluptatum assumenda ad nihil soluta quasi, fugit doloremque? Quam nobis recusandae dolorem odit sit numquam incidunt quae! Accusamus, cupiditate quaerat odit, blanditiis nulla expedita praesentium nobis nostrum, accusantium explicabo ducimus impedit neque aspernatur? Dolores distinctio et modi voluptatum velit ut accusantium tempore? Nulla, optio? Accusantium earum ratione quas quasi. Veniam dolorum, sapiente odio necessitatibus iusto omnis facere dicta adipisci."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kamil Atmaja",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque optio rerum necessitatibus cum ex sint adipisci dolor, ea explicabo id nobis nulla ullam veritatis minima numquam, tempore ratione quae aut. Repellendus, amet necessitatibus eaque nostrum ipsa a reiciendis ut facilis quidem doloremque sapiente dolor tenetur quibusdam saepe dolorem. Porro laboriosam odit dolor ullam. Mollitia earum perspiciatis sapiente, nihil fugit quas minus maxime dolor iusto? Eum commodi, quia inventore veniam, in, adipisci molestiae eveniet minus recusandae tempore necessitatibus aliquam odio totam similique reiciendis provident sed. Minima obcaecati soluta id, aspernatur deleniti veniam ut tenetur inventore nobis explicabo. Distinctio eos dolore qui."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
