<!-- Header -->
<header>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
      <a class="navbar-brand" href="#">{{ config('app.name')}}</a>
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
          <li class="nav-item">
            <a class="nav-link" href="#">Categories</a>
          </li>
        </ul>
        <ul class="nav navbar-nav  justify-content-end">
            @if (Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-person-circle"></i></a>
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
        <!--
        <form class="form-inline mt-2 mt-md-0">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                </div>
              </div>
        </form>-->

      </div>
    </div>
    </nav>
  </header>
<!-- End Header -->
