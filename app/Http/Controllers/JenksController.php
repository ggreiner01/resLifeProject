<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

use App\Floor;

class JenksController extends Controller
{
     public function indexjenksf1()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks West First Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks East First Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/jenks/jenksf1', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
    }
	    public function indexjenksf2()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks West Second Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks East Second Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/jenks/jenksf2', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
    }
	    public function indexjenksf3()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks West Third Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks East Third Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/jenks/jenksf3', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
    }
	    public function indexjenksf4()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks West Fourth Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Jenks East Fourth Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/jenks/jenksf4', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
		
    }
}
