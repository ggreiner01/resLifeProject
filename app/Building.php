<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'Building';
	public $primaryKey = 'BuildingID';
	protected $fillable = [
		'BuildingID',
		'IsAvailable',
		'YearOfResidenceID',
		'BuildingDescription'
		];
}
