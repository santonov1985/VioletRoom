<?php

namespace App\Http\Controllers\Pages;

class MainPageController
{
    public function index() {
     return view('admin.pages.main.index');
    }
}
