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

// Update Pertemuan 6
// Syntac 
// php artisan serve (untuk membuka local host)
// php artisan migrate:fresh (gunakan syntac tersebut setiap kali kita sudah menambahkan table atau melakukan sesuatu terhadap table)
// php artisan migrate (digunakan ketika untuk mengupload table yang sudah diubat atau ditambahkan)
// php artisan migrate:rollback (digunakan untuk menghapus table yang sudah diupload)
// php artisan tinker (untuk masuk dan mengatur database dari terminal)
// $user = new App\Models\User; (untuk masuk ke file User agar bisa mengedit apa saja yang akan diisikan kedalam table2 di table user)
// $user->save() (untuk menyimpan data yang telah dimasukan kedalam table)
// $user->all() (untuk melihat ada data apasaja yang ada ditable tersebut)
// $user->first() (untuk melihat data pertama yang ada di table)
// $user->find(2) (kolom tersebut diisi untuk melihat data yang keberapa atau id yang keberapa yang ingin dilihat datanya)
// $user->findOrFail() (untuk melihat apkah data tersebut ada jika tidak ada maka akan diberitahu dimana letak kesalahannya atau errornya)
// exit (untuk keluar dari php artisan tinker)
// 
// 
// 
// 
// 
// 
// 
// 
