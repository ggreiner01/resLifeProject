@extends('layouts.layout')

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
          <td>position</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->Pos}}</td>
            <td><a href="{{ route('admins.edit',$admin->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('admins.destroy', $admin->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="\admins\create"><button type="button" class="btn btn-primary">create</button></a>
<div>
@endsection