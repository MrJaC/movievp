<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class LandingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){


        //get popular movies
        $popularMovies = app(Movie::class)->getPopularMovies();
        //get x amount of slider
        $slider = array_slice($popularMovies['results'],0, 4, true);

        error_log(print_r($slider,true));

        return view('landing', [ 'popular' => $popularMovies, 'slider' => $slider]);
    }
}
