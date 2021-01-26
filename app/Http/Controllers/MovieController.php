<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{


    public function index($id, $title){

        $movieData = app(Movie::class)->getSingleMovie($id);


        $movieReview = app(Movie::class)->getMovieReviews($id);
        //slice movie review because lazy.

        $mR = array_slice($movieReview['results'],0, 4, true);
        error_log(print_r($movieData,true));
        error_log(print_r($mR,true));
        return view('movies.view', ['data' =>  $movieData, 'reviews' => $mR]);

    }
}
