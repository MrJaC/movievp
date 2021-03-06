<?php

namespace App\Http\Controllers;



use App\Models\Movie;


class LandingController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    /**
     * index
     *
     * @return void
     */
    public function index()
    {

        //get popular movies
        $data = app(Movie::class)->getPopularMovies();
        $trendingData = app(Movie::class)->getTrendingMovies();
        //slice data
        $popularMovies = array_slice($data['results'], 0, 12, true);
        $trending = array_slice($trendingData['results'], 0, 12, true);
        //get x amount of slider
        $slider = array_slice($data['results'], 0, 4, true);



        return view('landing', ['popular' => $popularMovies, 'slider' => $slider, 'trending' => $trending,]);
    }
}
