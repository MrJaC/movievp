<?php

namespace App\Http\Controllers;


use App\Models\Movie;

class GenresController extends Controller
{
    //

    /**
     * index
     *
     * @param  mixed $id
     * @param  mixed $title
     * @return void
     */
    public function index($id, $title)
    {
        $data = app(Movie::class)->getMovieViaGenre($id);

        return view('genre.view', ['data' => $data['results'], 'title' => $title]);
    }
}
