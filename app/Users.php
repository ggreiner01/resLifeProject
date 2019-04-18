<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
     protected $table = 'Users';
	 
	 protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'StudentID',
		'Gender',
		'BoardingGroupID',
		'Admins',
		'YearOfResidenceID' 
		];
}
