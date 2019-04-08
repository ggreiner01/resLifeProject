<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
     protected $table = 'Users';
	 public $primaryKey = 'StudentID';
	 protected $fillable = [
		 'StudentID',
		'FName',
        'LName',
		'AuEmail',
		'Gender',
		'BoardingGroupID',
		'Admins',
		'YearOfResidenceID' 
		];
}
