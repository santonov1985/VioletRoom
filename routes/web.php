<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\MainPageController;
use App\Http\Controllers\Pages\StockController;
use App\Http\Controllers\Pages\CinemaController;
use App\Http\Controllers\Pages\ServiceController;
use App\Http\Controllers\Pages\GalleryController;
use App\Http\Controllers\Pages\ContactController;

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

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'admin'], function () {

        //Logout
        Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

        Route::get('/', [AdminController::class, 'index'])->name('admin-index');

        //PAGES ROUTES
            //MAIN-PAGE
        Route::group(['prefix' => 'main-page'], function ()
        {
            Route::get('/', [MainPageController::class, 'index'])->name('main-index');
            Route::get('/title-edit/{id}', [MainPageController::class, 'mainIndexTitleEdit'])->name('main-index-title-edit');
            Route::post('/title-update/{id}', [MainPageController::class, 'updateTitle'])->name('main-index-title-update');
            Route::get('create-slider', [MainPageController::class, 'createSlider'])->name('main-index-create-slider');
            Route::post('create-slider', [MainPageController::class, 'storeSlider'])->name('main-index-store-slider');
        });

            //STOCK-PAGE
        Route::get('/stock-page', [StockController::class, 'index'])->name('stock-index');
            //CINEMA-PAGE
        Route::get('/cinema-page', [CinemaController::class, 'index'])->name('cinema-index');
        //SERVICES-PAGE
        Route::get('/services-page', [ServiceController::class, 'index'])->name('service-index');
        //GALLERIES-PAGE
        Route::get('/gallery-page', [GalleryController::class, 'index'])->name('gallery-index');
        //CONTACTS-PAGE
        Route::get('/contact-page', [ContactController::class, 'index'])->name('contact-index');
    });

    //ACL
    Route::group(['prefix' => 'acl'], function() {
        Route::namespace('ACL')->group(function () {
            //Permissions
            Route::group(['prefix' => 'permissions'], function() {
                Route::get('/', 'PermissionController@index')->middleware(['canAtLeast:permissions.view'])->name('permissions');
                Route::get('/create/{resource}', 'PermissionController@create')->middleware(['canAtLeast:permissions.create'])->name('permission-create');
                Route::post('/store', 'PermissionController@store')->middleware(['canAtLeast:permissions.create'])->name('permission-store');
                Route::get('/resource', 'PermissionController@resourceCreate')->middleware(['canAtLeast:permissions.create'])->name('permission-resource');
                Route::post('/resource/store', 'PermissionController@resourceStore')->middleware(['canAtLeast:permissions.create'])->name('permission-resource-store');
                Route::get('/edit/{id}', 'PermissionController@edit')->middleware(['canAtLeast:permissions.update'])->name('permission-edit');
                Route::post('/update/{id}', 'PermissionController@update')->middleware(['canAtLeast:permissions.update'])->name('permission-update');
                Route::get('/delete/{id}', 'PermissionController@destroy')->middleware(['canAtLeast:permissions.delete'])->name('permission-delete');
            });

            //Roles
            Route::group(['prefix' => 'roles'], function() {
                Route::get('/', 'RoleController@index')->middleware(['canAtLeast:roles.view'])->name('roles');
                Route::get('/create', 'RoleController@create')->middleware(['canAtLeast:roles.create'])->name('role-create');
                Route::post('/store', 'RoleController@store')->middleware(['canAtLeast:roles.create'])->name('role-store');
                Route::get('/edit/{id}', 'RoleController@edit')->middleware(['canAtLeast:roles.update'])->name('role-edit');
                Route::post('/update/{id}', 'RoleController@update')->middleware(['canAtLeast:roles.update'])->name('role-update');
                Route::get('/delete/{id}', 'RoleController@destroy')->middleware(['canAtLeast:roles.delete'])->name('role-delete');
                Route::get('/restore/{id}', 'RoleController@restore')->middleware(['canAtLeast:roles.restore'])->name('role-restore');
            });
        });
    });

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news',);
