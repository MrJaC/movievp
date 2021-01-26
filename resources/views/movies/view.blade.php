@extends('layouts.main')
@section('content')
<section id="hero-image">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
        <!-- Hero Image -->
        <div class="">
            <img src="https://image.tmdb.org/t/p/original{{ $data['backdrop_path'] }}" class="img-fluid w-100" alt="...">
        </div>
        <!-- End Hero Image-->
        </div>
    </div>
</div>
</section>
<section id="overview">
    <div class="container">
        <div class="row p-3 mb-5">
            <div class="col-6 text-left image">

                <img src="https://image.tmdb.org/t/p/original{{ $data['poster_path'] }}" class="img-thumbnail rounded" alt="...">
                <button type="button" class="btn btn-primary"><i class="bi bi-star"></i>Add to Watchlist</button>
            </div>
            <div class="col-6 text-white">
                <h5>Overview</h5>
                <h3> {{ $data['original_title']}}</h3>
                <p> {{ $data['overview']}}</p>
            </div>

        </div>
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <ul>
                    <li> Budget: {{ $data['budget']}}</li>
                </ul>
            </div>
            <div class="col-4">

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group list-group-horizontal">
                    @foreach ($data['production_companies'] as $prodClist )
                    <li class="list-group-item">
                        @if ($prodClist['logo_path'] == null)
                            {{ $prodClist['name']}}
                        @else
                        <img src="https://image.tmdb.org/t/p/original{{ $prodClist['logo_path']}}" class="img-thumbnail logo-company"></li>
                        @endif


                    @endforeach

                  </ul>
        </div>
    </div>
</section>
<section id="reviews">
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
        </div>
    </div>
</section>
@endsection
