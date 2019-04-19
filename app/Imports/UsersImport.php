<?php

namespace App\Imports;

use App\Users;
use App\YearOfResidence;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
		
		if($row[4] == "M")
		{
			$gender = 1;
		}
		if($row[4] == "F")
		{
			$gender = 2;
		}
		if($row[4] == "N")
		{
			$gender = 3;
		}
		$d = date("Y");
		$year = \DB::table('YearOFResidence')->where('Year', '=', $d)->first();
	
		
        $user = new Users([
            'name' => $row[3],
			'email' => $row[5],
			'StudentID'=> $row[0],
			'Gender' => $gender,
			'BoardingGroupID' => $row[6],
			'Admins' => 1,
			'YearOfResidenceID' => $year->id
        ]);
		$user->timestamps = false;
		return $user;
    }
}
