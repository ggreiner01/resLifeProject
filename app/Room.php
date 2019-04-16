<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $table = 'Room';
	 public $primaryKey = 'RoomID';
	 protected $fillable = [
		'BuildingID',
		'FloorID',
		'Capacity',
		'AmountTaken',
		'IsAvailable',
		'RoomNumber',
		'YearOfResidenceID'
		];
}
