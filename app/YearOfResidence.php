<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearOfResidence extends Model
{
    protected $table = 'YearOfResidence';
	protected $fillable = [
		'year'
		];
}