<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Movie;
use App\MovieJson;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $movies = Movie::query()->orderByDesc('created_at')->get();
        return view('user/cinema/cinema',compact('movies'));
    }

    public function json(){

        $dates = Movie::all()->toJson();
          dd($dates);

        $tmp = new MovieJson();
        $tmp->movies = $dates;
        $tmp->saveOrFail();
    }
    public function addEntry(Request $request){
        $addToDb = new MovieJson;

        $date = $request->json()->all();
        $jsonData = json_encode($date);
        dd($jsonData);
        die();

        $addToDb->movies = $jsonData;
        $addToDb->saveOrFail();
        return response()->json(["Status" => "Добавлено"]);

    }
    public function readEntry(){
        $tmpmovies = MovieJson::query()->orderByDesc('created_at')->get();
        $movies = json_decode($tmpmovies);
        dd($movies);
        return view('user/cinema/cinema2',compact('movies'));
    }
}
