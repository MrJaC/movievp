@extends('layouts.main')
@section('content')
<!-- Movie Cards -->

@foreach ( $popular['results'] as $pop )
<div class="row justify-content-center">
    <div class="col-md-4">

        <div class="card" style="width: 18rem;">
            <img src="https://image.tmdb.org/t/p/original{{ $pop['poster_path'] }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $pop['original_title']}}</h5>
              <p class="card-text">{{ $pop['overview']}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


    </div>
</div>
@endforeach
<!-- End Movie Cards
@endsection
