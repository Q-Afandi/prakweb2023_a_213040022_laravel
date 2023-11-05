<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body']; //ini boleh diisi sisanya gaboleh

     protected $guarded = ['id']; //ini yang gaboleh sisanya boleh
}
