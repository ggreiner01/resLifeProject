@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>StudentID</td>
          <td>First Name</td>
		  <td>Last Name</td>
		  <td>Au Email</td>
		  <td>Gender</td>
		  <td>Boarding Group ID</td>
		  <td>Admins</td>
		  <td>Year of Residence ID</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->StudentID}}</td>
            <td>{{$user->FName}}</td>
			<td>{{$user->LName}}</td>
			<td>{{$user->AuEmail}}</td>
			<td>{{$user->Gender}}</td>
			<td>{{$user->BoardingGroupID}}</td>
			<td>{{$user->Admins}}</td>
			<td>{{$user->YearOfResidenceID}}</td>
            <td><a href="{{ route('users.edit',$user->StudentID)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->StudentID)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection