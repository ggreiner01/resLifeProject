@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Boarding Group
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
      <form method="post" action="{{ route('boarding.update', $boarding->id) }}">
        @method('PATCH')
        @csrf
			<div class="form-group">
              <label for="boardingGroup">Boarding Group:</label>
              <input type="text" class="form-control" name="boardingGroup" value={{ $boarding->BoardingGroup}} />
          </div>
		  	<div class="form-group">
              <label for="timeToLogin">Time to Login:</label>
             <span id="datetime">
			 <input type="datetime-local" class="form-control" name="timeToLogin" value = {{$boarding->TimeToLogIn}} />
			 </span>
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection