<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class GenresController extends Controller
{
    //

    public function index(){


        return view('genre.view');
    }
}
