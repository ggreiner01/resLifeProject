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
          <td>BuildingID</td>
          <td>IsAvailable</td>
		  <td>YearOfResidenceID</td>
		  <td>BuildingDescription</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($buildings as $building)
        <tr>
            <td>{{$building->BuildingID}}</td>
            <td>{{$building->IsAvailable}}</td>
			<td>{{$building->YearOfResidenceID}}</td>
			<td>{{$building->BuildingDescription}}</td>
            <td><a href="{{ route('buildings.edit', $building->BuildingID)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('buildings.destroy', $building->BuildingID)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
 <a href="\buildings\create"><button type="button" class="btn btn-primary">create</button></a> 
<div>
@endsection