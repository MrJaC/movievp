@extends('layouts.main')
@section('content')
<section id="hero-image">
<div class="container">
    <div class="row">
        <div class="col">
        <!-- Hero Image -->
        <div class="">
            <img src="https://image.tmdb.org/t/p/original{{ $data['backdrop_path'] }}" class="img-fluid" alt="...">
        </div>
        <!-- End Hero Image-->
        </div>
    </div>
</div>
</section>
<section id="overview">
    <div class="container">
        <div class="row p-3">
            <div class="col-6">
                <h3>Overview</h3>
            </div>
            <div class="col-6 text-right">
                <h4><button type="button" class="btn btn-primary"><i class="bi bi-star"></i>Add to Watchlist</button></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</section>
<section id="reviews">
</section>
@endsection
