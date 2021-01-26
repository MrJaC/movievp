<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;



class Movie extends Model
{

    public function getPopularMovies(){
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');



        $combined = $baseUrl.'movie/popular?api_key='.$apiKey;
        $response = Http::get($combined)->json();

        return  $response;

    }

    public function getTrendingMovies(){
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl.'trending/movie/week?api_key='.$apiKey;
        $response = Http::get($combined)->json();


        return $response;

    }

    public function getSingleMovie($id){
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl.'movie/'.$id.'?api_key='.$apiKey;
        $response = Http::get($combined)->json();

        return $response;
    }

    public function getMovieReviews($id){

        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl.'movie/'.$id.'/reviews?api_key='.$apiKey;
        $response = Http::get($combined)->json();

        return $response;
    }
}
