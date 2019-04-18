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
		  <td>FloorID</td>
          <td>BuildingID</td>
          <td>IsAvailable</td>
		  <td>Gender</td>
		  <td>YearOfResidenceID</td>
		  <td>FloorDescription</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($floors as $floor)
        <tr>
			<td>{{$floor->FloorID}}</td>
            <td>{{$floor->BuildingID}}</td>
            <td>{{$floor->IsAvailable}}</td>
			<td>{{$floor->Gender}}</td>
			<td>{{$floor->YearOfResidenceID}}</td>
			<td>{{$floor->FloorDescription}}</td>
            <td><a href="{{ route('floors.edit', $floor->FloorID)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('floors.destroy', $floor->FloorID)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="\floors\create"><button type="button" class="btn btn-primary">create</button></a>
<div>
@endsection