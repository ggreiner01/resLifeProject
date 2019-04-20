<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
	 public function user()
	{
		return $this->belongsTo(User::class);
	}
    protected $table = 'Building';
	public $primaryKey = 'BuildingID';
	protected $fillable = [
		'BuildingID',
		'IsAvailable',
		'YearOfResidenceID',
		'BuildingDescription'
		];
}
