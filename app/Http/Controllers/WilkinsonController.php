<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

use App\Floor;

class WilkinsonController extends Controller
{
       public function indexwilkinsonf1()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Wilkinson First Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/wilkinson/wilkinsonf1', compact('rooms', 'floor'));
		
    }
	    public function indexwilkinsonf2()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Wilkinson Second Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/wilkinson/wilkinsonf2', compact('rooms', 'floor'));
		
    }
	    public function indexwilkinsonf3()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Wilkinson Third Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/wilkinson/wilkinsonf3', compact('rooms', 'floor'));
		
    }
	    public function indexwilkinsonlower()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Wilkinson Fourth Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/wilkinson/wilkinsonlower', compact('rooms', 'floor'));
		
    }
}
