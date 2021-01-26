<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{


    public function index($id, $title){

        $movieData = app(Movie::class)->getSingleMovie($id);

        error_log(print_r($movieData,true));
        return view('movies.view', ['data' =>  $movieData]);

    }
}
