<?php

use App\Http\Controllers\TestController;
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
Route::get('/rishi',[TestController::class,'index']);
Route::get('/form',[TestController::class,'form']);
Route::post('/form',[TestController::class,'store']);
Route::get('/show',[TestController::class,'show']);
Route::get('/{id}',[TestController::class,'edit']);
Route::post('/edit{id}',[TestController::class,'update']);
Route::get('/{id}',[TestController::class,'delete']);

