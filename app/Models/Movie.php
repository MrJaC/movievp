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


        error_log(print_r($baseUrl,true));
        $combined = $baseUrl.'movie/popular?api_key='.$apiKey;
        $response = Http::get($combined)->json();
        error_log(print_r($combined,true));
        return  $response;

    }
}
