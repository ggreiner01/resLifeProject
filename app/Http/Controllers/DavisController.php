<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

use App\Floor;

class DavisController extends Controller
{
     public function indexdavislower()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Davis Lower Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/davis/davislower', compact('rooms', 'floor'));
		
    }
	    public function indexdavisf2()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Davis Second Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/davis/davisf2', compact('rooms', 'floor'));
		
    }
	    public function indexdavisf3()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Davis Third Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/davis/davisf3', compact('rooms', 'floor'));
		
    }
	    public function indexdavisf4()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Davis Fourth Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/davis/davisf3', compact('rooms', 'floor'));
		
    }
}
