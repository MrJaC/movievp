<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return redirect('/');
    }

    public function dashboard()
    {

        //get data
        $id = Auth::id();

        $data = app(Movie::class)->getWatchListData($id);


        return view('dashboard.view', ['data' => $data]);
    }
}
