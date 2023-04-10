<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
       
        $query = $request->input('query');

        $data = Http::asJson()
        ->get('https://api.themoviedb.org/3/search/movie?api_key=986373d5b72b31cfb88b4be3ea46b303&query='.$query);

        return view('search')->with('datum', $data['results']);
    }

    public function recommend(Request $request){

        if ($request->input('query') == null) {
            
            return view('recommendation')->with('datum', null);
        }
    
        $query = $request->input('query');

        $data = Http::asJson()
        ->get('https://api.themoviedb.org/3/search/movie?api_key=986373d5b72b31cfb88b4be3ea46b303&query='.$query);
        
        $id = $data['results'][0]['id'];

        // dd($id); //1027497
        $data = Http::asJson()
        ->get('https://api.themoviedb.org/3/movie/'.$id .'/recommendations?api_key=986373d5b72b31cfb88b4be3ea46b303');

        // dd($data['results']);  
        return view('recommendation')->with('datum', $data['results']);
    }
}
