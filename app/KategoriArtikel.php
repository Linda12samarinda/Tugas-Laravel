<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'kategori_artikel';
}
