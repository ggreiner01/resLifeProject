<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
	 public function user()
	{
		return $this->belongsTo(User::class);
	}
     protected $table = 'Floor';
	 public $primaryKey = 'FloorID';
	 protected $fillable = [
		'FloorID',
		'BuildingID',
		'IsAvailable',
		'Gender',
		'YearOfResidenceID',
		'FloorDescription'
		];
}
