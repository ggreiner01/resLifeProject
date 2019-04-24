<!DOCTYPE html>

<html>

<head>
	<Title>almost done</title>
</head>

<body>
  @if(session()->get('error'))
    <div class="alert alert-success">
      {{ session()->get('error') }}  
	  <button onclick="history.go(-1);">Back </button>
    </div><br />
  @else
	
		<p>Want a different room?</p>
		<form action="{{ route('selection.destroy', $user->StudentID)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
        </form>
		<p>would you like to choose people to room with</p>
		<a href ="/select"><button class="btn btn-danger" type="submit">Roommate</button></a>
		@endif
</body>

</html>