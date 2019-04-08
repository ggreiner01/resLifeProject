<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardingGroup;

class BoardingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardings = BoardingGroup::all();

        return view('boarding.index', compact('boardings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boarding.create');
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
        'boardingGroup'=>'required',
		'timeToLogin'=>'required'
      ]);
      $boarding = new BoardingGroup();
      $boarding->BoardingGroup = $request->get('boardingGroup');
      $boarding->TimeToLogIn = $request->get('timeToLogin');
      
	  $boarding->timestamps = false;
      $boarding->save();
      return redirect('/boarding')->with('success', 'boarding group was added');
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
        $boarding = BoardingGroup::find($id);

        return view('boarding.edit', compact('boarding'));
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
        'boardingGroup'=>'required',
		'timeToLogin'=>'required'
      ]);

      $boarding = BoardingGroup::find($id);
      $boarding->BoardingGroup = $request->get('boardingGroup');
	  $boarding->TimeToLogIn = $request->get('timeToLogin');
	  $boarding->timestamps = false;
      $boarding->save();

      return redirect('/boarding')->with('success', 'boarding group has been updataed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boarding = BoardingGroup::find($id);
		$boarding->delete();

		return redirect('/boarding')->with('success', 'boarding group has been deleted');
    }
	public function getDateAttribute($value)
	{
		return Carbon::parse($value)->format('Y-m-d\TH:i');
	}
}
