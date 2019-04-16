@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Room
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
      <form method="post" action="{{ route('rooms.update', $room->RoomID) }}">
        @method('PATCH')
        @csrf
		  <div class="form-group">
              <label for="buildingid">BuildingID:</label>
              <input type="number" class="form-control" name="buildingid" value = {{$room->BuildingID}} />
          </div>
		  <div class="form-group">
              <label for="floorid">FloorID:</label>
              <input type="number" class="form-control" name="floorid" value = {{$room->FloorID}} />
          </div>
		  <div class="form-group">
              <label for="capacity">Capacity:</label>
              <input type="number" class="form-control" name="capacity" value = {{$room->Capacity}} />
          </div>
		  <div class="form-group">
              <label for="amounttaken">AmountTaken:</label>
              <input type="number" class="form-control" name="amounttaken" value = {{$room->AmountTaken}} />
          </div>
		  <div class="form-group">
              <label for="isavailable">IsAvailable:</label>
              <input type="number" min="0" max="1" class="form-control" name="isavailable" value = {{$room->IsAvailable}} />
          </div>
		     <div class="form-group">
              <label for="roomnumber">RoomNumber:</label>
              <input type="text" class="form-control" name="roomnumber"  value = {{$room->RoomNumber}} />
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid" value = {{$room->YearOfResidenceID}} />
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection