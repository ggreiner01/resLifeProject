<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\Room;
use App\WhoAndWhere;
use App\PeopleToRoomWith;
use App\Floor;
use App\Building;

class RoommateController extends Controller
{

	public function selection(){
		$user = Users::find(auth()->id());

        return view('/select', compact('user'));
	}
	public function index(){
		$user = Users::find(auth()->id());
		$people = \DB::table('PeopleToRoomWith')->where('StudentID1', '=', $user->id)->first();
		if($people != null){
		    $asker = \DB::table('Users')->where('id', '=', $people->Asker)->first();
		    $user2 = \DB::table('Users')->where('id', '=', $people->StudentID2)->first();
			$room = Room::find($people->RoomID);
			$floor = Floor::find($people->FloorID);
			$building = Building::find($people->BuildingID);
	        return view('/roomate', compact('user', 'asker', 'user2', 'room', 'floor', 'building'));
		}
		$people = \DB::table('PeopleToRoomWith')->where('StudentID2', '=', $user->id)->first();
		if($people != null){
			$asker = \DB::table('Users')->where('id', '=', $people->Asker)->first();
		    $user2 = \DB::table('Users')->where('id', '=', $people->StudentID1)->first();
			$room = Room::find($people->RoomID);
			$floor = Floor::find($people->FloorID);
			$building = Building::find($people->BuildingID);
			return view('/roomate', compact('user', 'asker', 'user2', 'room', 'floor', 'building'));
		}
		else{
			return view('/reshall');
		}
	}
    public function store(Request $request)
    {
		$student = Users::find(auth()->id());
		$who = \DB::table('WhoAndWhere')->where('StudentID', '=', $student->StudentID)->first();
		$who1 = \DB::table('WhoAndWhere')->where('StudentID', '=', $request->get('studentid1'))->first();
		$who2 = \DB::table('WhoAndWhere')->where('StudentID', '=', $request->get('studentid2'))->first();
		$student1 = \DB::table('Users')->where('StudentID', '=', $request->get('studentid1'))->first();
		$student2 = \DB::table('Users')->where('StudentID', '=', $request->get('studentid2'))->first();
		if($student1 != null && $student2 != null  && $student1->id !=  $student2->id && $who1 == null && $who2 == null ){
        $people = new PeopleToRoomWith([
		'Asker'=> $student->id,
		'StudentID1' => $student1->id,
		'StudentID2' => $student2->id,
		'BuildingID' => $who->BuildingID,
		'FloorID' => $who->FloorID,
		'RoomID' => $who->RoomID,
		'YearOfResidenceID' => $who->YearOfResidenceID
		]);
		if($student1 != null && $student2 == null  && $student1->id !=  $student2->id && $who1 == null && $who2 == null){
        $people = new PeopleToRoomWith([
		'Asker'=> $student->id,
		'StudentID1' => $student1->id,
		'StudentID2' => null,
		'BuildingID' => $who->BuildingID,
		'FloorID' => $who->FloorID,
		'RoomID' => $who->RoomID,
		'YearOfResidenceID' => $who->YearOfResidenceID
		]);
		}
		if($student1 == null && $student2 != null  && $student1->id !=  $student2->id && $who1 == null && $who2 == null){
        $people = new PeopleToRoomWith([
		'Asker'=> $student->id,
		'StudentID1' => $student1->id,
		'StudentID2' => null,
		'BuildingID' => $who->BuildingID,
		'FloorID' => $who->FloorID,
		'RoomID' => $who->RoomID,
		'YearOfResidenceID' => $who->YearOfResidenceID
		]);
		}
		$people->timestamps = false;
        $people->save();
		return redirect('/almost')->with('success', 'You have choosen some posible roommates.');
		}else if($student1 != null && $student2 != null && $student1->StudentID ==  $student2->StudentID) {
			return redirect('/select')->with('error', 'cannot pick the same student.');
		}else{
			return redirect('/select')->with('error', 'cannot find students');
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
