<!-- Header -->
<header>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Movies</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Genres</a>



            <div class="dropdown-menu">
                @foreach ( $genres['genres'] as $g )
              <a class="dropdown-item" href="#">{{ $g['name']}}</a>

              @endforeach
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav  justify-content-end">
            @if (Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-person-circle"></i> {{ Auth::user()->name }} </a>
            </li>
            @else
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
            @endauth
          </ul>
          @endif


      </div>
    </div>
    </nav>
  </header>
<!-- End Header -->
