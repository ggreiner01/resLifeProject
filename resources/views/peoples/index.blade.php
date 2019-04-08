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
		  <td>id</td>
          <td>StudentID1</td>
		  <td>StudentID2</td>
          <td>BuildingID</td>
		  <td>FloorID</td>
		  <td>RoomID</td>
          <td>Year of Residence ID</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($peoples as $people)
        <tr>
			<td>{{$people->id}}</td>
            <td>{{$people->StudentID1}}</td>
			<td>{{$people->StudentID2}}</td>
			<td>{{$people->BuildingID}}</td>
			<td>{{$people->FloorID}}</td>
			<td>{{$people->RoomID}}</td>
            <td>{{$people->YearOfResidenceID}}</td>
            <td><a href="{{ route('peoples.edit', $people->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('peoples.destroy', $people->id)}}" method="post">
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