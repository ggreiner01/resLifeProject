<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Building;

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();

        return view('buildings.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('buildings.create');
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
        'buildingid'=>'required',
		'isavailable'=>'required',
		'yearofresidenceid'=>'required',
		'buildingdescription'=>'required'
      ]);
      $building = new Building([
        'BuildingID' => $request->get('buildingid'),
		'IsAvailable' => $request->get('isavailable'),
		'YearOfResidenceID' => $request->get('yearofresidenceid'),
		'BuildingDescription' => $request->get('buildingdescription')
      ]);
	  $building->timestamps = false;
      $building->save();
      return redirect('/buildings')->with('success', 'building was added');
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
        $building = Building::find($id);

        return view('buildings.edit', compact('building'));
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
			'buildingid'=>'required',
			'isavailable'=>'required',
			'yearofresidenceid'=>'required',
			'buildingdescription'=>'required'
		]);

      $building = Building::find($id);
      $building->BuildingID = $request->get('buildingid');
	  $building->IsAvailable = $request->get('isavailable');
	  $building->YearOfResidenceID = $request->get('yearofresidenceid');
	  $building->BuildingDescription = $request->get('buildingdescription');
	  $building->timestamps = false;
      $building->save();

      return redirect('/buildings')->with('success', 'building has been updataed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building = Building::find($id);
		$building->delete();

		return redirect('/buildings')->with('success', 'building has been deleted');
    }
}
