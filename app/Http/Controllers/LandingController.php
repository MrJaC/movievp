<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\General;

class LandingController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {


        //get popular movies
        $data = app(Movie::class)->getPopularMovies();
        $trendingData = app(Movie::class)->getTrendingMovies();
        $genres = app(General::class)->getCategories();


        //slice data
        $popularMovies = array_slice($data['results'], 0, 12, true);
        $trending = array_slice($trendingData['results'], 0, 12, true);
        //get x amount of slider
        $slider = array_slice($data['results'], 0, 4, true);

        error_log(print_r($trendingData, true));

        return view('landing', ['popular' => $popularMovies, 'slider' => $slider, 'trending' => $trending, 'genres' => $genres]);
    }
}
