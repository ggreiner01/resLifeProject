<title>Selection</title>
@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  @if(session()->get('error'))
    <div class="alert alert-success">
      {{ session()->get('error') }}  
    </div><br />
  @endif
  <div class="card-header">
    You can now choose people that you would like to room with.
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
      <form method="post" action="{{ route('roomate.store') }}">
            <div class="form-group">
              @csrf
              <label for="studentid1">First student ID:</label>
              <input type="number" class="form-control" name="studentid1"/>
          </div>
		  <div class="form-group">
              <label for="studentid2">Second student ID:</label>
              <input type="number" class="form-control" name="studentid2"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
	  <a href = "/almost"><button type="submit" class="btn btn-primary">Decline</button></a>
  </div>
</div>
@endsection