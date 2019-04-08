<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
		'fname'=>'required',
		'lname' =>'required',
        'auemail' => 'required',
		'gender'=> 'required',
		'boardinggroupid' => 'required',
		'admins' => 'required',
		'yearofresidenceid'=>'required'
      ]);
      $user = new Users([
	    'StudentID' => $request->get('studentid'),
		'FName' => $request->get('fname'),
        'LName' => $request->get('lname'),
		'AuEmail' => $request->get('auemail'),
		'Gender' => $request->get('gender'),
		'BoardingGroupID' => $request->get('boardinggroupid'),
		'Admins' => $request->get('admins'),
		'YearOfResidenceID' => $request->get('yearofresidenceid')
      ]);
	  $user->timestamps = false;
      $user->save();
	  return redirect('/users')->with('success', 'user was added');
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
        $user= Users::find($id);

        return view('users.edit', compact('user'));
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
		'fname'=>'required',
		'lname' =>'required',
        'auemail' => 'required',
		'gender'=> 'required',
		'boardinggroupid' => 'required',
		'admins' => 'required',
		'yearofresidenceid'=>'required'
      ]);
      $user = Users::find($id);
	  $user->StudentID = $request->get('studentid');
	  $user->FName = $request->get('fname');
      $user->LName = $request->get('lname');
	  $user->AuEmail = $request->get('auemail');
	  $user->Gender = $request->get('gender');
	  $user->BoardingGroupID = $request->get('boardinggroupid');
	  $user->Admins = $request->get('admins');
	  $user->YearOfResidenceID = $request->get('yearofresidenceid');
	  $user->timestamps = false;
      $user->save();
      return redirect('/users')->with('success', 'user was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);
		$user->delete();

		return redirect('/users')->with('success', 'user has been deleted');
    }
}
