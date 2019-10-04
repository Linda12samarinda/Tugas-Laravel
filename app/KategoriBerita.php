<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'kategori_berita';
}
