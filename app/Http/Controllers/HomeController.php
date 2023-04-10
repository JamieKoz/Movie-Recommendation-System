<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $data = Http::asJson()
        ->get('https://api.themoviedb.org/3/movie/now_playing?api_key=986373d5b72b31cfb88b4be3ea46b303');

        return view('home')->with('datum', $data['results']);
    }
}
