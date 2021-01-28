@extends('layouts.main')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
              <div class="carousel-caption">
                <h1>{{ $s['original_title']}}</h1>
                <p class="text-truncate">{{ $s['overview']}}</p>
                <p><a class="btn btn-lg btn-md btn-dark" href="{{ route('view-movie', ['id' => $s['id'], 'title' => $s['original_title']])}}">View..</a></p>
              </div>
            </div>
          </div>
          @else
          <div class="carousel-item">
              <img src="https://image.tmdb.org/t/p/original{{ $s['backdrop_path'] }}" class="d-block w-100" alt="...">

          <div class="container">
              <div class="carousel-caption d-none d-md-block">
                <h1>{{ $s['original_title']}}</h1>
                <p class="text-truncate">{{ $s['overview']}}</p>
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
<section id="featured-dular">
    <div class="container">
        <div class="row border-top-0 mx-md-n5 p-5">
        <div class="col">
            <h3>Most Popular {{ $title }} Movies</h3>
        </div>
        </div>
    </div>

<!-- Movie Cards -->
<div class="container">

<div class="row justify-content-center pb-5 ">
@foreach ( $data as $d )
<div class="col-md-3">
    <div class="card-group">
    <div class="card text-white hover-img">
        <img src="https://image.tmdb.org/t/p/original{{ $d['poster_path'] }}" class="card-img-top" alt="...">
        <div class="card-img-overlay d-flex flex-column">
          <h5 class="card-title">{{ $d['original_title']}}</h5>
          <p class="card-text text-truncate">{{ $d['overview']}}</p>
          <a href="{{ route('view-movie', ['id' => $d['id'], 'title' => $d['original_title']])}}" class="btn btn-dark mt-auto">View </a>
        </div>
      </div>
    </div>

</div>
@endforeach
</div>

</div>
</section>
@endsection
