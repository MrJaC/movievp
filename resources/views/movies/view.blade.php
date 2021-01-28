@extends('layouts.main')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Hero Image -->
        <div class="banner">
        <div class="banner-img-h">
            <img src="https://image.tmdb.org/t/p/original{{ $data['backdrop_path'] }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
        <!-- End Hero Image-->
</div>

<section id="overview">
    <div class="container">
        <div class="row  justify-content-center p-3 mb-5  mt-5">
            <div class="col-6 text-white">
                <h5>Overview</h5>
                <h3> {{ $data['original_title']}}</h3>
                <p> {{ $data['overview']}}</p>
                @foreach ( $data['genres'] as $g )
                <div>
                    <ul class="list-unstyled">
                        <li class="list-inline-item">{{ $g['name'] }}</li>
                        <li class="list-inline-item"><li>
                    </ul>
                </div>
                @endforeach
                <p>Budget: {{ $data['budget']}}</p>
                @guest
                Sign in for watch list


             @else
             @if ($check == 1)
             <button type="submit" data-id="{{ $data['id'] }}" data-name="{{ $data['original_title'] }}" data-image="{{ $data['poster_path'] }}" id="movie-id" class="btn btn-primary btn-submit text-center"><i class="bi bi-star"></i> Remove </button>
             @else
             <button type="submit" data-id="{{ $data['id'] }}" data-name="{{ $data['original_title'] }}" data-image="{{ $data['poster_path'] }}" id="movie-id" class="btn btn-primary btn-submit text-center"><i class="bi bi-star"></i> Add to Watchlist </button>
             @endif

            @endguest
            </div>
            <div class="col-6  image">
                    <img src="https://image.tmdb.org/t/p/original{{ $data['poster_path'] }}" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 text-white">



            </div>
            <div class="col-4">

            </div>
        </div>
</section>
@if (empty($reviews))

@else
<section id="reviews">
    <div class="container">
        <div class="row mx-md-n5 p-5">
        <div class="col-12">
            <h4>Reviews</h4>
        </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($reviews as $r )
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{ url('img/default.png')}}" alt="..." class="img-fluid">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$r['author']}}</h5>
                          <p class="card-text text-truncate">{{$r['content']}}</p>
                          <p class="card-text"><small class="text-muted">Rating: </small></p>
                        </div>
                        <div class="card-footer text-right">
                           <a href="{{ $r['url']}}">Read more..</a>
                           <small></small>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

<section id="similar-movie">
    <div class="container-fluid">
        <div class="row justify-content-center m-3">
            <div class="col-12 text-white">
            <h4>Similar Movies</h4>
        </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-center m-3">
        @foreach ( $similar as $sim )
        <div class="col-lg-2">
            <a href="{{ route('view-movie', ['id' => $sim['id'], 'title' => $sim['original_title']])}}">
            <div class="card-group pb-3">
            <div class="card text-white no-border hover-img">
                <img src="https://image.tmdb.org/t/p/original{{ $sim['poster_path'] }}" class="card-img-top" alt="...">
                <div class="card-img-overlay d-flex flex-column">
                  <h5 class="card-title">{{ $sim['original_title']}}</h5>
                  <p class="card-text text-truncate">{{ $sim['overview']}}</p>

                </div>
              </div>
            </div>
        </a>

        </div>
        @endforeach
    </div>
</div>
</section>
<!--
<section id="review-container">
    <div class="container-fluid">
    <div class="row  justify-content-center  m-5">
        <div class="col text-center">
            <h4 class="display-4">Companies involved</h4>
            <ul class="list-inline">
                @foreach ($data['production_companies'] as $prodClist )
                <li class="list-inline-item">
                    @if ($prodClist['logo_path'] == null)
                        {{ $prodClist['name']}}
                    @else
                    <img src="https://image.tmdb.org/t/p/original{{ $prodClist['logo_path']}}" class="img-fluid logo-company"></li>
                    @endif


                @endforeach

              </ul>
    </div>
</div>
</div>
</section>
-->
@endsection
