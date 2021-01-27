@extends('layouts.main')
@section('content')

<div class="container">
 <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
              Your Watchlist
            </div>
            <div class="card-body">

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Action</th>
                    <th scope="col">Movie Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Added</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $d )


                  <tr>
                    <th scope="row">{{$d->id}}</th>
                    <th scope="row"><button type="submit" data-id="{{ $d->movie_id }}" data-name="{{ $d->title }}" id="movie-id" class="btn btn-primary btn-submit"><i class="bi bi-star"></i>Add to Watchlist </button></th>
                    <th scope="row">{{$d->movie_id}}</th>
                    <th scope="row">{{$d->title}}</th>
                    <th scope="row">{{$d->created_at}}</th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

    </div>
</div>
</div>
@endsection
