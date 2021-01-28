<!-- Header -->
<header>

    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Genres</a>

            <div class="dropdown-menu text-white bg-dark">
                @foreach ( $genres['genres'] as $g )
              <a class="dropdown-item text-white" href="{{ route('genre', ['id' => $g['id'], 'name' => $g['name']])}}">{{ $g['name']}}</a>

              @endforeach
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav  justify-content-end">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right text-white bg-dark" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-white" href="{{ route('dashboard')}}">Your Watch list</a>
                                        <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </ul>

      </div>
    </div>
    </nav>
  </header>
<!-- End Header -->
