<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
class MovieController extends Controller
{


    public function index($id, $title){

        $movieData = app(Movie::class)->getSingleMovie($id);


        $movieReview = app(Movie::class)->getMovieReviews($id);
        //slice movie review because lazy.

        $mR = array_slice($movieReview['results'],0, 4, true);

        return view('movies.view', ['data' =>  $movieData, 'reviews' => $mR]);

    }


    public function watchListARP(Request $request){

       //check user is authed

        $id = Auth::id();
        //into array
        $data = array(
            'user_id' => $id,
            'movie_id' => $request->id,
            'title' => $request->title

        );
        error_log(print_r($data,true));
        $insert = app(Movie::class)->updateWatchListMovie($data);
            if($insert == true){
                error_log(print_r($insert,true));
                return response()->json(['success' => 'Added to Watchlist!']);
            }else{
                error_log(print_r($insert, true));
                return response()->json(['error' => 'failed']);
            }

    }
}
