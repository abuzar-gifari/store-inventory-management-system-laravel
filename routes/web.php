<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SizesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/template', function () {
//     return view('layouts.master');
// });




Route::middleware(['auth:sanctum'])->group(function(){
    //categories route
    Route::resource('/categories', CategoriesController::class);
    //brands route
    Route::resource('/brands', BrandsController::class);
    //sizes route
    Route::resource('/sizes', SizesController::class);
});
