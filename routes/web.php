<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('user/home/index');
//});
Route::get('/', 'Home\IndexController@index')->name('home');
Route::get('/stocks', 'Stock\IndexController@index')->name('stocks-index');
Route::get('/cinema', 'Cinema\IndexController@index')->name('cinema-index');
Route::get('/cinema/1', 'Cinema\IndexController@readEntry')->name('cinema2-index');
Route::get('/json', 'Cinema\IndexController@json')->name('json');

