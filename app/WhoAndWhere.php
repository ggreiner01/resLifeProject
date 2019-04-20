<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhoAndWhere extends Model
{
	  public function user()
	{
		return $this->belongsTo(User::class);
	}
    protected $table = 'WhoAndWhere';
	 protected $fillable = [
		'StudentID',
		'BuildingID',
		'FloorID',
		'RoomID',
		'YearOfResidenceID'
		];
}
