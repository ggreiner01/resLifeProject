<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

use App\Floor;

class WatkinsController extends Controller
{
	   public function indexwatkinslower()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins West Lower Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins East Lower Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/watkins/watkinslower', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
		
    }
       public function indexwatkinsf1()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins West First Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins East First Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/watkins/watkinsf1', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
		
    }
	    public function indexwatkinsf2()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins West Second Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins East Second Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/watkins/watkinsf2', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
    }
	    public function indexwatkinsf3()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins West Third Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins East Third Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/watkins/watkinsf3', compact('rooms1', 'rooms2', 'floor1', 'floor2'));
    }
	    public function indexwatkinsf4()
    {
		$floor1 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins West Fourth Floor')->first();
		$floor2 = \DB::table('Floor')->where('FloorDescription', '=', 'Watkins East Fourth Floor')->first();
		$rooms1 = \DB::table('Room')->where('FloorID', $floor1->FloorID)->get();
		$rooms2 = \DB::table('Room')->where('FloorID', $floor2->FloorID)->get();
		return view('/watkins/watkinsf4', compact('rooms1', 'rooms2', 'floor1', 'floor2'));	
    }
}
