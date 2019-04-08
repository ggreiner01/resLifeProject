<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\WhoAndWhere;

class WhoAndWhereController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whos = WhoAndWhere::all();

        return view('whos.index', compact('whos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('whos.create');
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
		'studentid' => 'required',
		'buildingid'=>'required',
		'floorid' =>'required',
        'roomid' => 'required',
		'yearofresidenceid'=>'required'
      ]);
      $who = new WhoAndWhere([
	    'StudentID' => $request->get('studentid'),
		'BuildingID' => $request->get('buildingid'),
		'FloorID' => $request->get('floorid'),
		'RoomID' => $request->get('roomid'),
		'YearOfResidenceID' => $request->get('yearofresidenceid')
      ]);
	  $who->timestamps = false;
      $who->save();
	  return redirect('/whos')->with('success', 'who and where was added');
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
        $who = WhoAndWhere::find($id);

        return view('whos.edit', compact('who'));
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
		'studentid' => 'required',
		'buildingid'=>'required',
		'floorid' =>'required',
        'roomid' => 'required',
		'yearofresidenceid'=>'required'
      ]);
      $who = WhoAndWhere::find($id);
	  $who->StudentID = $request->get('studentid');
	  $who->BuildingID = $request->get('buildingid');
	  $who->FloorID = $request->get('floorid');
	  $who->RoomID = $request->get('roomid');
	  $who->YearOfResidenceID = $request->get('yearofresidenceid');
	  $who->timestamps = false;
      $who->save();
      return redirect('/whos')->with('success', 'who and where was changed');
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

		return redirect('/whos')->with('success', 'who and where has been deleted');
    }
}
