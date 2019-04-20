<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardingGroup extends Model
{
	 public function user()
	{
		return $this->belongsTo(User::class);
	}
    protected $table = 'BoardingGroup';
	protected $fillable = [
		'BoardingGroup'
		];
	protected $dates = ['TimeToLogin'];
}
