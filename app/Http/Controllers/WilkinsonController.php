<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Room;
use App\WhoAndWhere;
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
		$floor = \DB::table('Floor')->where('FloorDescription', '=', 'Wilkinson Lower Floor')->first();
		$rooms = \DB::table('Room')->where('FloorID', '=', $floor->FloorID)->get();
		return view('/wilkinson/wilkinsonlower', compact('rooms', 'floor'));
		
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
