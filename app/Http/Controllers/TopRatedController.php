<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TopRatedController extends Controller
{
    public function index(){

        // $tmdb_id = 436270; //Black Adam (2022) Movie TMDB ID

        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/top_rated'. '?api_key='.config('services.tmdb.api'));

            return view('top-rated')->with('datum', $data['results']);
    }
}
