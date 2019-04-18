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
		  <td>RoomID</td>
		  <td>BuildingID</td>
          <td>FloorID</td>
		  <td>Capacity</td>
		  <td>AmountTaken</td>
          <td>IsAvailable</td>
		  <td>RoomNumber</td>
		  <td>YearOfResidenceID</td>		  
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
			<td>{{$room->RoomID}}</td>
			<td>{{$room->BuildingID}}</td>
			<td>{{$room->FloorID}}</td>
			<td>{{$room->Capacity}}</td>
			<td>{{$room->AmountTaken}}</td>
            <td>{{$room->IsAvailable}}</td>
			<td>{{$room->RoomNumber}}</td>
			<td>{{$room->YearOfResidenceID}}</td>
            <td><a href="{{ route('rooms.edit', $room->RoomID)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('rooms.destroy', $room->RoomID)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="\rooms\create"><button type="button" class="btn btn-primary">create</button></a>
<div>
@endsection