@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Boarding Group
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
      <form method="post" action="{{ route('boarding.store') }}">
          <div class="form-group">
              @csrf
              <label for="boardingGroup">Boarding Group:</label>
              <input type="text" class="form-control" name="boardingGroup"/>
          </div>
		  	<div class="form-group">
              <label for="timeToLogin">Time to Login:</label>
              <input type="datetime-local" class="form-control" name="timeToLogin"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection