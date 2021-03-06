@extends('layouts.main')
@section('content')
<!-- Carousel -->
<main role="main">

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
          @foreach ($slider as $s )
          @if ($loop->first)
          <li data-target="#myCarousel" data-slide-to="{{ $s['id'] }}" class="active"></li>
          @else
          <li data-target="#myCarousel" data-slide-to="{{ $s['id'] }}"></li>
          @endif

          @endforeach

      </ol>
      <div class="carousel-inner">
          @foreach ($slider as $s )



            @if ($loop->first)
            <div class="carousel-item active">
                <img src="https://image.tmdb.org/t/p/original{{ $s['backdrop_path'] }}" class="d-block w-100" alt="...">

            <div class="container">
                <div class="carousel-caption text-left d-none d-md-block">
                  <h1>{{ $s['original_title']}}</h1>

                  <p><a class="btn btn-md  btn-dark" href="{{ route('view-movie', ['id' => $s['id'], 'title' => $s['original_title']])}}">View</a></p>
                </div>
              </div>
            </div>
            @else
            <div class="carousel-item">
                <img src="https://image.tmdb.org/t/p/original{{ $s['backdrop_path'] }}" class="d-block w-100" alt="...">

            <div class="container-fluid">
                <div class="carousel-caption text-left d-none d-md-block">
                  <h1>{{ $s['original_title']}}</h1>

                  <p><a class="btn btn-md btn btn-dark" href="{{ route('view-movie', ['id' => $s['id'], 'title' => $s['original_title']])}}">View</a></p>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>


      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<!-- End Carousel -->
<!-- Categories -->

<!-- End Categories -->
<!-- Featured - Popular -->
<section id="featured-popular">
        <div class="container-fluid">
            <div class="row justify-content-center m-3">
                <div class="col-12 text-white">
                <h3>Most Popular Movies</h3>
            </div>
            </div>
        </div>

<!-- Movie Cards -->
<div class="container-fluid">

<div class="row justify-content-center m-3">
    @foreach ( $popular as $pop )
    <div class="col-md-2">
        <a href="{{ route('view-movie', ['id' => $pop['id'], 'title' => $pop['original_title']])}}">
        <div class="card-group pb-3">
        <div class="card text-white no-border hover-img">
            <img src="https://image.tmdb.org/t/p/original{{ $pop['poster_path'] }}" class="card-img-top" alt="...">
            <div class="card-img-overlay d-flex flex-column">
              <h5 class="card-title">{{ $pop['original_title']}}</h5>
              <p class="card-text text-truncate">{{ $pop['overview']}}</p>

            </div>
          </div>
        </div>
    </a>

    </div>
    @endforeach
</div>

</div>
</section>
<!-- End Movie Cards -->

<!-- Trending -->
<section id="trending">
    <div class="container-fluid">
        <div class="row justify-content-center m-3">
        <div class="col-12 text-white">
            <h3>Currently Trending this Week</h3>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center m-3">
            @foreach ( $trending as $trend )
            <div class="col-md-2">
                <a href="{{ route('view-movie', ['id' => $trend['id'], 'title' => $trend['original_title']])}}">
                <div class="card-group pb-3">
                <div class="card text-white  no-border hover-img">
                    <img src="https://image.tmdb.org/t/p/original{{ $trend['poster_path'] }}" class="card-img-top" alt="...">
                    <div class="card-img-overlay d-flex flex-column">
                      <h5 class="card-title">{{ $trend['original_title']}}</h5>
                      <p class="card-text text-truncate">{{ $trend['overview']}}</p>

                    </div>
                  </div>
                </div>
            </a>

            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Trending -->
@endsection
