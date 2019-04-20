<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleToRoomWith extends Model
{
	 public function user()
	{
		return $this->belongsTo(User::class);
	}
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
