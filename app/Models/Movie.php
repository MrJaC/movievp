<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use DB;


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

    public function updateWatchListMovie($data){


          //check if record exist
          if ($a = DB::table('watchlist')->where($data, 1)->exists()) {
            //remove record
            DB::table('watchlist')->where($data)->delete();

            return false;
        }else{
            //insert the record.
            DB::table('watchlist')->insert($data);
            return true;
        }

    }
    public function checkWLM($data){
        if ($a = DB::table('watchlist')->where($data, 1)->exists()) {
            return true;
        }
    }

    public function getWatchListData($id){

        //get user watch list

        $data = DB::table('watchlist')->select()->where('watchlist.user_id', '=' , $id)->get();
        return $data;
    }
}
