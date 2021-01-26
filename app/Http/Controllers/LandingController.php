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

        $popularMovies = app(Movie::class)->getPopularMovies();


        return view('landing', [ 'popular' => $popularMovies]);
    }
}
