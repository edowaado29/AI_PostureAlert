<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;

class PostureCollection extends Eloquent
{
    protected $connection = 'mongodb';  // Koneksi MongoDB yang benar
    protected $collection = 'AIPosture'; // Nama koleksi di MongoDB

    protected $fillable = ['title', 'body', 'slug'];  // Kolom yang bisa diisi
}
