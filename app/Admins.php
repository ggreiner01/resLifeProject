<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $table = 'Admins';
	protected $fillable = [
		'Pos'
		];
}
