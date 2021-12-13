<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Caesar",
            "slug" => "judul-post-pertama",
            "author" => "Caesar Gracia",
            "body" => "Test ipsum dolor sit amet consectetur adipisicing elit. Fuga animi nobis totam neque hic, nulla fugit tenetur corporis ea repellat reiciendis rerum, mollitia illo. Quibusdam unde recusandae repellat aut maxime odio quasi tempora? Consequuntur consectetur eius ad beatae nam. Magni pariatur numquam quisquam molestias placeat ad in, repellat dolorem quod labore, cumque earum laboriosam! Inventore quisquam quaerat nam illo quasi temporibus ipsa odio culpa vel tempora. Tenetur impedit labore aliquam quibusdam odio. Provident, praesentium dignissimos inventore excepturi ex necessitatibus accusantium."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fiony",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga animi nobis totam neque hic, nulla fugit tenetur corporis ea repellat reiciendis rerum, mollitia illo. Quibusdam unde recusandae repellat aut maxime odio quasi tempora? Consequuntur consectetur eius ad beatae nam. Magni pariatur numquam quisquam molestias placeat ad in, repellat dolorem quod labore, cumque earum laboriosam! Inventore quisquam quaerat nam illo quasi temporibus ipsa odio culpa vel tempora. Tenetur impedit labore aliquam quibusdam odio. Provident, praesentium dignissimos inventore excepturi ex necessitatibus accusantium."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //      if($p["slug"] === $slug){
        //          $post = $p;
        //     }
        // }       
    return $posts->firstWhere('slug', $slug); 
    }
}
