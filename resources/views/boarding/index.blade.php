@extends('layouts.crud')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Boarding Group</td>
		  <td>Time To Login</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($boardings as $boarding)
        <tr>
            <td>{{$boarding->id}}</td>
            <td>{{$boarding->BoardingGroup}}</td>
			<td>{{$boarding->TimeToLogIn}}</td>
            <td><a href="{{ route('boarding.edit',$boarding->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('boarding.destroy', $boarding->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="\boarding\create"><button type="button" class="btn btn-primary">create</button></a>
<div>
@endsection