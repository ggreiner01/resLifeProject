@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Who And Where
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
      <form method="post" action="{{ route('whos.update', $who->id) }}">
        @method('PATCH')
        @csrf
			<div class="form-group">
              <label for="studentid">StudentID:</label>
              <input type="number" class="form-control" name="studentid" value ={{$who->StudentID }} />
            </div>
		  <div class="form-group">
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid" value = {{$who->BuildingID}} />
          </div>
		  <div class="form-group">
              <label for="floorid">FloorID:</label>
              <input type="number" class="form-control" name="floorid" value = {{$who->FloorID}} />
          </div>
		  <div class="form-group">
              <label for="roomid">RoomID:</label>
              <input type="number" class="form-control" name="roomid" value = {{$who->RoomID}} />
          </div>
			<div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid" value ={{$who->YearOfResidenceID }} />
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection