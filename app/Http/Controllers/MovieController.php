<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * index
     *
     * @param  mixed $id
     * @param  mixed $title
     * @return void
     */
    public function index($id, $title)
    {

        if (Auth::user()) {
            $userId = Auth::id();
            $data = array(
                'user_id' =>  $userId,
                'movie_id' => $id,
                'title' => $title

            );
            $movieData = app(Movie::class)->getSingleMovie($id);
            $movieReview = app(Movie::class)->getMovieReviews($id);
            $check = app(Movie::class)->checkWLM($data);
            //slice movie review
            error_log(print_r($check, true));
            $mR = array_slice($movieReview['results'], 0, 4, true);

            return view('movies.view', ['data' =>  $movieData, 'reviews' => $mR, 'check' => $check]);
        } else {
            $movieData = app(Movie::class)->getSingleMovie($id);
            $movieReview = app(Movie::class)->getMovieReviews($id);
            //slice movie review

            $mR = array_slice($movieReview['results'], 0, 4, true);

            return view('movies.view', ['data' =>  $movieData, 'reviews' => $mR]);
        }
    }


    /**
     * watchListARP
     *
     * @param  mixed $request
     * @return void
     */
    public function watchListARP(Request $request)
    {

        //check user is authed
        $id = Auth::id();
        //into array
        $data = array(
            'user_id' => $id,
            'movie_id' => $request->id,
            'title' => $request->title,
            'image_path' => $request->image

        );
        error_log(print_r($data, true));
        $insert = app(Movie::class)->updateWatchListMovie($data);
        if ($insert == "1") {
            return response()->json(['success' => 'Added to Watchlist!']);
        } else {

            return response()->json(['success' => 'Removed from Watchlist!']);
        }
    }
}
