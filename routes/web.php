<?php

use App\Http\Controllers\maController;
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

Route::get('/ma/hello', function(){
   return "Hello, Test";
});

Route::get("/ma/movies", [maController::class, 'movieList']);
Route::get("/ma/movies/selectedMovie/{id}",[maController::class, 'selectedMovie']);
Route::get("/ma/movies/reserveVisit",[maController::class, 'reserveVisit']);
