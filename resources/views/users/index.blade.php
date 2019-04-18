@extends('layouts.crud')

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
          <td>name</td>
          <td>email</td>
		  <td>password</td>
		  <td>StudentID</td>
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
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
			<td>{{$user->password}}</td>
			<td>{{$user->StudentID}}</td>
			<td>{{$user->Gender}}</td>
			<td>{{$user->BoardingGroupID}}</td>
			<td>{{$user->Admins}}</td>
			<td>{{$user->YearOfResidenceID}}</td>
            <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="\users\create"><button type="button" class="btn btn-primary">create</button></a>
<div>
@endsection