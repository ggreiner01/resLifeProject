<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

use App\Floor;

class MemorialController extends Controller
{
     public function indexmemf1()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Memorial First Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/memorial/memf1', compact('rooms', 'floor'));
		
    }
	    public function indexmemf2()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Memorial Second Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/memorial/memf2', compact('rooms', 'floor'));
		
    }
	    public function indexmemf3()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Memorial Third Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/memorial/memf3', compact('rooms', 'floor'));
		
    }
	    public function indexmemf4()
    {
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Memorial Fourth Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/memorial/memf4', compact('rooms', 'floor'));
		
    }
}
