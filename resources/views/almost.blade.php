<!DOCTYPE html>

<html>

<head>
	<Title>almost done</title>
</head>

<body>
		<p>Want a different room?</p>
		<form action="{{ route('selection.destroy', $user->StudentID)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
</body>

</html>