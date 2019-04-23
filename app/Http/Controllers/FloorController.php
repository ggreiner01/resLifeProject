<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Floor;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::all();

        return view('floors.index', compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('floors.create');
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
		'floorid' =>'required',
        'buildingid'=>'required',
		'isavailable'=>'required',
		'gender'=>'required',
		'yearofresidenceid'=>'required',
		'floordescription'=>'required'
      ]);
      $floor = new Floor([
		'FloorID' => $request->get('floorid'),
        'BuildingID' => $request->get('buildingid'),
		'IsAvailable' => $request->get('isavailable'),
		'Gender' => $request->get('gender'),
		'YearOfResidenceID' => $request->get('yearofresidenceid'),
		'FloorDescription' => $request->get('floordescription')
      ]);
	  $floor->timestamps = false;
      $floor->save();
      return redirect('/floors')->with('success', 'floor was added');
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
        $floor = Floor::find($id);

        return view('floors.edit', compact('floor'));
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
        'floorid' =>'required',
        'buildingid'=>'required',
		'isavailable'=>'required',
		'gender'=>'required',
		'yearofresidenceid'=>'required',
		'floordescription'=>'required'
      ]);
      $floor = Floor::find($id);
	  $floor->FloorID = $request->get('floorid');
      $floor->BuildingID = $request->get('buildingid');
	  $floor->IsAvailable = $request->get('isavailable');
	  $floor->Gender = $request->get('gender');
	  $floor->YearOfResidenceID = $request->get('yearofresidenceid');
	  $floor->FloorDescription = $request->get('floordescription');
	  $floor->timestamps = false;
      $floor->save();
      return redirect('/floors')->with('success', 'floor was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $floor = Floor::find($id);
		$floor->delete();

		return redirect('/floors')->with('success', 'floor has been deleted');
    }
	 public function Centennial()
    {
        $floors = Floor::all();

        return view('/centennial', compact('floors'));
    }
}
