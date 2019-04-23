<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PeopleToRoomWith;

class PeopleToRoomWithController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = PeopleToRoomWith::all();
		
        return view('peoples.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('peoples.create'); 
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
		'asker' => 'required',
		'studentid1' => 'required',
		'studentid2' => 'required',
		'buildingid'=>'required',
		'floorid' =>'required',
        'roomid' => 'required',
		'yearofresidenceid'=>'required'
      ]);
      $people = new PeopleToRoomWith([
	    'Asker'=> $request->get('asker'),
	    'StudentID1' => $request->get('studentid1'),
		'StudentID2' => $request->get('studentid2'),
		'BuildingID' => $request->get('buildingid'),
		'FloorID' => $request->get('floorid'),
		'RoomID' => $request->get('roomid'),
		'YearOfResidenceID' => $request->get('yearofresidenceid')
      ]);
	  $people->timestamps = false;
      $people->save();
	  return redirect('/peoples')->with('success', 'people to room with was added');
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
       $people = PeopleToRoomWith::find($id);

        return view('peoples.edit', compact('people')); 
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
			'studentid1' => 'required',
			'studentid2' => 'required',
			'buildingid'=>'required',
			'floorid' =>'required',
			'roomid' => 'required',
			'yearofresidenceid'=>'required'
      ]);
      $people = PeopleToRoomWith::find($id);
	  $people->StudentID1 = $request->get('studentid1');
	  $people->StudentID2 = $request->get('studentid2');
	  $people->BuildingID = $request->get('buildingid');
	  $people->FloorID = $request->get('floorid');
	  $people->RoomID = $request->get('roomid');
	  $people->YearOfResidenceID = $request->get('yearofresidenceid');
	  $people->timestamps = false;
      $people->save();
      return redirect('/peoples')->with('success', 'people to room with was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people = PeopleToRoomWith::find($id);
		$people->delete();

		return redirect('/peoples')->with('success', 'people to room with has been deleted');
    }
}
