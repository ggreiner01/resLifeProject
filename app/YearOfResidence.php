<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearOfResidence extends Model
{
	 public function user()
	{
		return $this->belongsTo(User::class);
	}
    protected $table = 'YearOfResidence';
	protected $fillable = [
		'year'
		];
}
