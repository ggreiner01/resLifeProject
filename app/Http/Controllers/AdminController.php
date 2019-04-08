<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admins;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $admins = Admins::all();

        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admins.create');
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
        'pos'=>'required'
      ]);
      $admin = new Admins([
        'Pos' => $request->get('pos')
      ]);
	  $admin->timestamps = false;
      $admin->save();
      return redirect('/admins')->with('success', 'admin status was added');
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
        $admin = Admins::find($id);

        return view('admins.edit', compact('admin'));
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
        'pos'=>'required'
      ]);

      $admin = Admins::find($id);
      $admin->Pos = $request->get('pos');
	  $admin->timestamps = false;
      $admin->save();

      return redirect('/admins')->with('success', 'admin status has been updataed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admins::find($id);
		$admin->delete();

		return redirect('/admins')->with('success', 'Admin status has been deleted');
    }
}
