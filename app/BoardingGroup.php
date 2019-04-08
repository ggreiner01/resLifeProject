<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardingGroup extends Model
{
    protected $table = 'BoardingGroup';
	protected $fillable = [
		'BoardingGroup'
		];
	protected $dates = ['TimeToLogin'];
}
