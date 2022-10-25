<?php

namespace App\Models;


class _Post
{
    private static $blog_posts = [
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
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque optio rerum necessitatibus cum ex sint adipisci dolor, ea explicabo id nobis nulla ullam veritatis minima numquam, tempore ratione quae aut. Repellendus, amet necessitatibus eaque nostrum ipsa a reiciendis ut facilis quidem doloremque sapiente dolor tenetur quibusdam saepe dolorem. "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
