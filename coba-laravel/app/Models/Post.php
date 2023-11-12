<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body']; //ini boleh diisi sisanya gaboleh

     protected $guarded = ['id']; //ini yang gaboleh sisanya boleh
     protected $with = ['category', 'author'];
       // with() adalah penggunaan eager loading supaya mengefesiensikan query

     public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}