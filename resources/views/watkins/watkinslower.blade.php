<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Watkins Lower Floor</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
     @include("layouts.header")
    <div class="container-fluid">
      <div class="row">
		</br>
		@include("layouts.sidebar")
		</br>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		</br>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Watkins Hall lower floor</h1>
          </div>

          <p style="text-align:center;"><img src="/pictures/Watkins_Lower_Floor.jpg"  alt="Card image cap" height="500" width ="380" style = "transform:rotate(270deg)"></p>

          <h2>{{ $floor1->FloorDescription }} and {{ $floor2->FloorDescription }}</h2>
		   <a href="\almost">to almost done page</a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                  <th>Room number</th>
                  <th>capacity</th>
                  <th>availability</th>
				  <th>spaces taken</th>
                  <th>East</th>
                </tr>
              </thead>
              <tbody>
               @foreach($rooms2 as $room)
			   @if($room->IsAvailable == 1)
                <tr>
                  <td>{{ $room->RoomNumber }}</td>
				  <td>{{ $room->Capacity }}</td>
				  @if (  $room->IsAvailable == 1)
						<td>yes</td>  
				  @else
						<td>no</td>
				  @endif
				  <td>{{ $room->AmountTaken }}</td>
				 <form method="post" action="{{ route('selection.store', ['id' => $room->RoomID]) }}">
				   @csrf
                  <td><button type="submit" class="btn btn-primary">Choose</button></td>	
				  </form>
                  
                </tr>     
				@endif				
			@endforeach
              </tbody>
            </table>
			<table class="table table-striped table-sm">
              <thead>
                <tr>
				  <th>Room number</th>
                  <th>capacity</th>
                  <th>availability</th>
				  <th>spaces taken</th>
                  <th>West</th>
                </tr>
              </thead>
              <tbody>
               @foreach($rooms1 as $room)
			   @if($room->IsAvailable == 1)
                <tr>
                  <td>{{ $room->RoomNumber }}</td>
				  <td>{{ $room->Capacity }}</td>
				  @if (  $room->IsAvailable == 1)
						<td>yes</td>  
				  @else
						<td>no</td>
				  @endif
				  <td>{{ $room->AmountTaken }}</td>
                  <form method="post" action="{{ route('selection.store', ['id' => $room->RoomID]) }}">
				   @csrf
                  <td><button type="submit" class="btn btn-primary">Choose</button></td>	
				  </form>
                </tr>      
				@endif
			@endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>