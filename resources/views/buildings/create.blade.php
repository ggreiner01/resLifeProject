@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Building
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
      <form method="post" action="{{ route('buildings.store') }}">
          <div class="form-group">
			@csrf
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid"/>
          </div>
		  <div class="form-group">
              <label for="isavailable">IsAvailable:</label>
              <input type="number" class="form-control" name="isavailable"/>
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid"/>
          </div>
		  <div class="form-group">
              <label for="buildingdescription">BuildingDescription:</label>
              <input type="text" class="form-control" name="buildingdescription"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection