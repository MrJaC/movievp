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

        $slider = array_slice($data['results'], 0, 4, true);
        
        return view('genre.view', ['data' => $data['results'], 'title' => $title, 'slider' => $slider]);
    }
}
