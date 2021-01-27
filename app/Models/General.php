<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class General extends Model
{
    use HasFactory;

    public function getCategories()
    {
        $baseUrl = env('TMDB_BASEURL');
        $apiKey = env('TMDB_APIKEY');

        $combined = $baseUrl . 'genre/movie/list?api_key=' . $apiKey;
        $response = Http::get($combined)->json();

        return $response;
    }
}
