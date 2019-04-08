<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $table = 'Room';
	 public $primaryKey = 'RoomID';
	 protected $fillable = [
		'RoomID',
		'BuildingID',
		'FloorID',
		'Capacity',
		'AmountTaken',
		'IsAvailable',
		'YearOfResidenceID'
		];
}
