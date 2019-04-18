@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit People to Room With
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
      <form method="post" action="{{ route('peoples.update', $people->id) }}">
        @method('PATCH')
        @csrf
			<div class="form-group">
              <label for="studentid1">StudentID1:</label>
              <input type="number" class="form-control" name="studentid1" value ={{$people->StudentID1 }} />
            </div>
			<div class="form-group">
              <label for="studentid2">StudentID2:</label>
              <input type="number" class="form-control" name="studentid2" value ={{$people->StudentID2 }} />
            </div>
		  <div class="form-group">
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid" value = {{$people->BuildingID}} />
          </div>
		  <div class="form-group">
              <label for="floorid">FloorID:</label>
              <input type="number" class="form-control" name="floorid" value = {{$people->FloorID}} />
          </div>
		  <div class="form-group">
              <label for="roomid">RoomID:</label>
              <input type="number" class="form-control" name="roomid" value = {{$people->RoomID}} />
          </div>
			<div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid" value ={{$people->YearOfResidenceID }} />
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection