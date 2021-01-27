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

    /**
     * getPopularMovies
     *
     * @return void
     */
    public function getPopularMovies()
    {
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');



        $combined = $baseUrl . 'movie/popular?api_key=' . $apiKey;
        $response = Http::get($combined)->json();

        return  $response;
    }

    /**
     * getTrendingMovies
     *
     * @return void
     */
    public function getTrendingMovies()
    {
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl . 'trending/movie/week?api_key=' . $apiKey;
        $response = Http::get($combined)->json();


        return $response;
    }

    /**
     * getSingleMovie
     *
     * @param  mixed $id
     * @return void
     */
    public function getSingleMovie($id)
    {
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl . 'movie/' . $id . '?api_key=' . $apiKey;
        $response = Http::get($combined)->json();

        return $response;
    }

    /**
     * getMovieReviews
     *
     * @param  mixed $id
     * @return void
     */
    public function getMovieReviews($id)
    {

        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl . 'movie/' . $id . '/reviews?api_key=' . $apiKey;
        $response = Http::get($combined)->json();

        return $response;
    }
    /**
     * getMovieViaGenre
     *
     * @param  mixed $id
     * @return void
     */
    public function getMovieViaGenre($id)
    {

        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl . 'discover/movie?api_key=' . $apiKey . '&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=' . $id;

        $response = Http::get($combined)->json();

        return $response;
    }
    /**
     * updateWatchListMovie
     *
     * @param  mixed $data
     * @return void
     */
    public function updateWatchListMovie($data)
    {


        //check if record exist
        if ($a = DB::table('watchlist')->where($data, 1)->exists()) {
            //remove record
            DB::table('watchlist')->where($data)->delete();

            return false;
        } else {
            //insert the record.
            DB::table('watchlist')->insert($data);
            return true;
        }
    }
    /**
     * checkWLM
     *
     * @param  mixed $data
     * @return void
     */
    public function checkWLM($data)
    {
        if ($a = DB::table('watchlist')->where($data, 1)->exists()) {
            return true;
        }
    }

    /**
     * getWatchListData
     *
     * @param  mixed $id
     * @return void
     */
    public function getWatchListData($id)
    {

        //get user watch list

        $data = DB::table('watchlist')->select()->where('watchlist.user_id', '=', $id)->get();

        return $data;
    }
}
