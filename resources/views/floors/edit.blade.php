@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Floor
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('floors.update', $floor->FloorID) }}">
        @method('PATCH')
        @csrf
		<div class="form-group">
              <label for="floorid">FloorID:</label>
              <input type="number" class="form-control" name="floorid" value = {{$floor->FloorID}} />
          </div>
			<div class="form-group">
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid" value = {{$floor->BuildingID}} />
          </div>
		  <div class="form-group">
              <label for="isavailable">IsAvailable:</label>
              <input type="number" class="form-control" name="isavailable" value = {{$floor->IsAvailable}} />
          </div>
		  <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="number" class="form-control" name="gender" value = {{$floor->Gender}} />
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="text" class="form-control" name="yearofresidenceid" value = {{$floor->YearOfResidenceID}} />
          </div>
		  <div class="form-group">
              <label for="buildingdescription">FloorDescription:</label>
              <input type="text" class="form-control" name="floordescription" value = {{$floor->FloorDescription}} />
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection