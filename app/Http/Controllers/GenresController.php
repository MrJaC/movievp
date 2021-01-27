<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenresController extends Controller
{
    //

    public function index($id)
    {
        $data = app(Movie::class)->getMovieViaGenre($id);

        return view('genre.view', ['data' => $data]);
    }
}
