@extends('layouts.main')
@section('content')
<section id="wl-banner">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>
</section>
<div class="container">
 <div class="row d-flex min-vh-100 mx-md-n5 p-5 m-5" >
    <div class="col">
        <div class="card">
            <div class="card-header">
              Your Watchlist
            </div>
            <div class="card-body">

              <table id="table-wl"class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Action</th>
                    <th>Image</th>
                    <th>View</th>
                    <th>Movie Id</th>
                    <th>Title</th>
                    <th>Added</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $d )


                  <tr>
                    <td>{{$d->id}}</td>
                    <td><button type="submit" data-id="{{ $d->movie_id }}" data-name="{{ $d->title }}" id="movie-id" class="btn btn-primary btn-submit"><i class="bi bi-trash"></i></button></td>
                    <td class="img-wl"><img src="https://image.tmdb.org/t/p/original{{ $d->image_path }}" alt="..."></td>
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
