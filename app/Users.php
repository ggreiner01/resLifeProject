<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	 public function user()
	{
		return $this->belongsTo(User::class);
	}
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
