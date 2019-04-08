@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit User
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
      <form method="post" action="{{ route('users.update', $user->StudentID) }}">
        @method('PATCH')
        @csrf
			<div class="form-group">
              <label for="studentid">StudentID:</label>
              <input type="number" class="form-control" name="studentid" value ={{$user->StudentID }} />
          </div>
		   <div class="form-group">
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="fname" value ={{$user->FName }} />
          </div>
		  <div class="form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" name="lname" value ={{$user->LName}} />
          </div>
		  <div class="form-group">
              <label for="auemail">Au Email:</label>
              <input type="text" class="form-control" name="auemail" value ={{$user->AuEmail }} />
          </div>
		  <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="number" class="form-control" name="gender" value ={{$user->Gender }} />
          </div>
		  <div class="form-group">
              <label for="boardinggroupid">BoardingGroupID:</label>
              <input type="number" class="form-control" name="boardinggroupid" value ={{$user->BoardingGroupID }} />
          </div>
		  <div class="form-group">
              <label for="admins">Admins:</label>
              <input type="number" class="form-control" name="admins" value ={{$user->Admins }} />
          </div>
		  <div class="form-group">
              <label for="yearofresidenceid">YearOfResidenceID:</label>
              <input type="number" class="form-control" name="yearofresidenceid" value ={{$user->YearOfResidenceID }} />
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection