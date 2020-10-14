<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\HomeStock;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $stocks = HomeStock::all();
        return view('user/stocks/stocks',compact('stocks'));
    }
}
