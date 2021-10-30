<?php

use App\Http\Controllers\JobController;
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
Route::get('/jobs',[JobController::class,'index'])->middleware('auth');
Route::get('/jobs/create',[JobController::class,'create'])->middleware('auth');
Route::post('/jobs',[JobController::class,'store'])->middleware('auth');
Route::get('/jobs/{id}',[JobController::class,'show'])->middleware('auth');
Route::delete('/jobs/{id}',[JobController::class,'destroy'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
