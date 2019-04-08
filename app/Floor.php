<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
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
