<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index(){

        // $tmdb_id = 436270; //Black Adam (2022) Movie TMDB ID
        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/popular'. '?api_key='.config('services.tmdb.api'));

        $data = $data['results'];
        return view('popular')->with('datum', $data);
    }
}
