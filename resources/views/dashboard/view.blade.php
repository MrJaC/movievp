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
                    <th scope="col">View</th>
                    <th scope="col">Movie Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Added</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $d )


                  <tr>
                    <td>{{$d->id}}</td>
                    <td><button type="submit" data-id="{{ $d->movie_id }}" data-name="{{ $d->title }}" id="movie-id" class="btn btn-primary btn-submit"><i class="bi bi-trash"></i></button></td>
                    <td><a href="{{ route('view-movie', ['id' => $d->movie_id, 'title' => $d->title])}}">View</a></td>
                    <td>{{$d->movie_id}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->created_at}}</td>
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
