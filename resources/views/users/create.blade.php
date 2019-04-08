@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add User
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
      <form method="post" action="{{ route('users.store') }}">
          <div class="form-group">
              @csrf
              <label for="studentid">StudentID:</label>
              <input type="number" class="form-control" name="studentid"/>
          </div>
		   <div class="form-group">
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="fname"/>
          </div>
		  <div class="form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" name="lname"/>
          </div>
		  <div class="form-group">
              <label for="auemail">Au Email:</label>
              <input type="text" class="form-control" name="auemail"/>
          </div>
		  <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="number" class="form-control" name="gender"/>
          </div>
		  <div class="form-group">
              <label for="boardinggroupid">BoardingGroupID:</label>
              <input type="number" class="form-control" name="boardinggroupid"/>
          </div>
		  <div class="form-group">
              <label for="admins">Admins:</label>
              <input type="number" class="form-control" name="admins"/>
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection