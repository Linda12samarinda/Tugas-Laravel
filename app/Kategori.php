<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //

	protected $table = 'katergori';
	//

	protected $fillable = [
        'name', 'keterangan', 'user_id',
    ];
}
