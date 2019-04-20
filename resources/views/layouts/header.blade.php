<link href="navbar.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<nav class="navbar navbar-custom">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item" style = "color:#00467F"><a class="navbar-nav mr-auto" href="/aurora.edu" style ="color:white;">Aurora University</a></li>
      </ul>

          <!-- Authentication Links -->
          @guest
              <li class="nav-item" style = "color:#00467F">
                  <a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item" style = "color:#00467F">
                      <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown" style = "color:#00467F">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style = "color:white;">
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" style="color:white"  action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
	@if(Auth::check())
      <li class="nav-item dropdown" style = "color:#00467F">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        style = "color:white;">
         Admin Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/admins">Roles</a>
          <a class="dropdown-item" href="/boarding">Boarding Group</a>
          <a class="dropdown-item" href="/buildings">Buildings</a>
          <a class="dropdown-item" href="/floors">Floors</a>
          <a class="dropdown-item" href="/rooms">Rooms</a>
          <a class="dropdown-item" href="/genders">Genders</a>
          <a class="dropdown-item" href="/peoples">People To Room With</a>
          <a class="dropdown-item" href="/users">Users</a>
          <a class="dropdown-item" href="/whos">Who and Where</a>
          <a class="dropdown-item" href="/years">Years</a>
        </div>
      </li>
	@endif

</nav>
<style>
	.navbar-custom {
    background-color: #00467F;
	}
}

</style>
