<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\Room;
use App\WhoAndWhere;
use App\Floor;

class SelectionController extends Controller
{
	public function almost(){
		$user = Users::find(auth()->id());

        return view('/almost', compact('user'));
	}
    public function store(Request $request)
    {
		$student = Users::find(auth()->id());
		$room = Room::find($request->get('id'));
		$whos = \DB::table('WhoAndWhere')->where('StudentID', '=', $student->StudentID)->first();
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
		$student = Users::find(auth()->id());
		$whos = \DB::table('WhoAndWhere')->where('StudentID', '=', $student->StudentID)->first();
		$rooms = \DB::table('Room')->where('RoomID', '=', $whos->RoomID)->first();
		$room = Room::find($rooms->RoomID);
		$who = \DB::table('WhoAndWhere')->where('StudentID', '=', $student->StudentID)->delete();
		$room->timestamps = false;
		$room->AmountTaken = $room->AmountTaken - 1;
		if($room->Capacity > $room->AmountTaken)
			$room->IsAvailable = 1;
		$room->save();
		return redirect('/reshall')->with('success', 'you can pick another room');
    }
}
