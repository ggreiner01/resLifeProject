@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Rooom
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
      <form method="post" action="{{ route('rooms.store') }}">
		<div class="form-group">
				@csrf
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid" />
          </div>
		  <div class="form-group">
              <label for="floorid">FloorID:</label>
              <input type="number" class="form-control" name="floorid"  />
          </div>
		  <div class="form-group">
              <label for="capacity">Capacity:</label>
              <input type="number" class="form-control" name="capacity"  />
          </div>
		  <div class="form-group">
              <label for="amounttaken">AmountTaken:</label>
              <input type="number" class="form-control" name="amounttaken"  />
          </div>
		  <div class="form-group">
              <label for="isavailable">IsAvailable:</label>
              <input type="number" min="0" max="1" class="form-control" name="isavailable"  />
          </div>
		    <div class="form-group">
              <label for="roomnumber">RoomNumber:</label>
              <input type="text" class="form-control" name="roomnumber"  />
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid" />
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection