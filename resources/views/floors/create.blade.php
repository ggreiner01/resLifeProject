@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Floor
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
      <form method="post" action="{{ route('floors.store') }}">
          <div class="form-group">
		  @csrf
              <label for="floorid">FloorID:</label>
              <input type="number" class="form-control" name="floorid"  />
          </div>
			<div class="form-group">
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid"  />
          </div>
		  <div class="form-group">
              <label for="isavailable">IsAvailable:</label>
              <input type="number" class="form-control" name="isavailable" />
          </div>
		  <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="number" class="form-control" name="gender"  />
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="text" class="form-control" name="yearofresidenceid"/>
          </div>
		  <div class="form-group">
              <label for="floordescription">FloorDescription:</label>
              <input type="text" class="form-control" name="floordescription"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection