<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
		'roomid' => 'required',
		'buildingid'=>'required',
		'floorid' =>'required',
        'capacity' => 'required',
		'amounttaken' => 'required',
		'isavailable'=>'required',
		'yearofresidenceid'=>'required'
      ]);
      $room = new Room([
	    'RoomID' => $request->get('roomid'),
		'FloorID' => $request->get('floorid'),
        'BuildingID' => $request->get('buildingid'),
		'Capacity' => $request->get('capacity'),
		'AmountTaken' => $request->get('amounttaken'),
		'IsAvailable' => $request->get('isavailable'),
		'YearOfResidenceID' => $request->get('yearofresidenceid')
      ]);
	  $room->timestamps = false;
      $room->save();
	  return redirect('/rooms')->with('success', 'room was added');
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
        $room = Room::find($id);

        return view('rooms.edit', compact('room'));
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
        $request->validate([
			'roomid' => 'required',
			'buildingid'=>'required',
			'floorid' =>'required',
			'capacity' => 'required',
			'amounttaken' => 'required',
			'isavailable'=>'required',
			'yearofresidenceid'=>'required'
      ]);
      $room = Room::find($id);
	  $room->RoomID = $request->get('roomid');
	  $room->BuildingID = $request->get('buildingid');
	  $room->FloorID = $request->get('floorid');
      $room->Capacity = $request->get('capacity');
	  $room->AmountTaken = $request->get('amounttaken');
	  $room->IsAvailable = $request->get('isavailable');
	  $room->YearOfResidenceID = $request->get('yearofresidenceid');
	  $room->timestamps = false;
      $room->save();
      return redirect('/rooms')->with('success', 'room was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
		$room->delete();

		return redirect('/rooms')->with('success', 'room has been deleted');
    }
}
