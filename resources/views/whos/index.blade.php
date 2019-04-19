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
		  <td>id</td>
          <td>StudentID</td>
          <td>BuildingID</td>
		  <td>FloorID</td>
		  <td>RoomID</td>
          <td>Year of Residence ID</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($whos as $who)
        <tr>
			<td>{{$who->id}}</td>
            <td>{{$who->StudentID}}</td>
			<td>{{$who->BuildingID}}</td>
			<td>{{$who->FloorID}}</td>
			<td>{{$who->RoomID}}</td>
            <td>{{$who->YearOfResidenceID}}</td>
            <td><a href="{{ route('whos.edit', $who->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('whos.destroy', $who->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="\whos\create"><button type="button" class="btn btn-primary">create</button></a>
<div>
@endsection