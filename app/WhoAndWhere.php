<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhoAndWhere extends Model
{
    protected $table = 'WhoAndWhere';
	 protected $fillable = [
		'StudentID',
		'BuildingID',
		'FloorID',
		'RoomID',
		'YearOfResidenceID'
		];
}
