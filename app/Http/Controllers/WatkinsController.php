<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Room;
use App\WhoAndWhere;
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
	public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$student = Users::find(auth()->id());
		$room = Room::find($request->get('id'));
		$whos = $year = \DB::table('WhoAndWhere')->where('StudentID', '=', $student->StudentID)->first();
		if($whos == null){
        $who = new WhoAndWhere([
		'StudentID' => $student->StudentID,
		'BuildingID' => $room->BuildingID,
		'FloorID' => $room->FloorID,
		'RoomID' => $room->RoomID,
		'YearOfResidenceID' => $room->YearOfResidenceID
		]);
		$who->timestamps = false;
		$room->timestamps = false;
        $who->save();
		$room->AmountTaken = $room->AmountTaken += 1;
		if($room->Capacity == $room->AmountTaken)
			$room->IsAvailable = 0;
		$room->save();
		return redirect('/almost')->with('success', 'You have choosen a room');
		}
		else{
			return redirect('/almost')->with('Hey', 'You have already choosen a room');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $who = WhoAndWhere::find($id);
		$who->delete();
		$room->timestamps = false;
		$room->AmountTaken = $room->AmountTaken -= 1;
		if($room->Capacity > $room->AmountTaken)
			$room->IsAvailable = 1;
		$room->save();
		return redirect('/reshall')->with('success', 'you can pick another room');
    }
}
