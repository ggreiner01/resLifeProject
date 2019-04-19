@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Building
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
      <form method="post" action="{{ route('buildings.update', $building->BuildingID) }}">
        @method('PATCH')
        @csrf
			<div class="form-group">
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid" value = {{$building->BuildingID}} />
          </div>
		  <div class="form-group">
              <label for="isavailable">IsAvailable:</label>
              <input type="number" class="form-control" name="isavailable" value = {{$building->IsAvailable}} />
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="text" class="form-control" name="yearofresidenceid" value = {{$building->YearOfResidenceID}} />
          </div>
		  <div class="form-group">
              <label for="buildingdescription">BuildingDescription:</label>
              <input type="text" class="form-control" name="buildingdescription" value = {{$building->BuildingDescription}} />
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection