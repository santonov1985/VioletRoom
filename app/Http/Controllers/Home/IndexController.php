<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeStock;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
//        $stocks = HomeStock::all();
        $stocks = HomeStock::query()
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $sliders = Slider::all();
        return view('user/home/index', compact('stocks','sliders'));
    }
}
