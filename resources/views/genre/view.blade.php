@extends('layouts.main')
@section('content')

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
