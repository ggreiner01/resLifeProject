<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\YearOfResidence;

class YearOfResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $years = YearOfResidence::all();

        return view('years.index', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('years.create');
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
        'year'=>'required'
      ]);
      $year = new YearOfResidence([
        'year' => $request->get('year')
      ]);
	  $year->timestamps = false;
      $year->save();
      return redirect('/years')->with('success', 'year was added');
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
        $year = YearOfResidence::find($id);

        return view('years.edit', compact('year'));
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
        'year'=>'required'
      ]);

      $year = YearOfResidence::find($id);
      $year->Year = $request->get('year');
	  $year->timestamps = false;
      $year->save();
      return redirect('/years')->with('success', 'year has been updataed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year = YearOfResidence::find($id);
		$year->delete();

		return redirect('/years')->with('success', 'year has been deleted');
    }
}
