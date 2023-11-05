<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [ 
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
            "title" => "judu Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
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
