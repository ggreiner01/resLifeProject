<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleToRoomWith extends Model
{
    protected $table = 'PeopleToRoomWith';
	 protected $fillable = [
		'StudentID1',
		'StudentID2',
		'BuildingID',
		'FloorID',
		'RoomID',
		'YearOfResidenceID'
		];
}
