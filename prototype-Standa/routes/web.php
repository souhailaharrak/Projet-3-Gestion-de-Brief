<?php

use App\Http\Controllers\PromotionController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BriefController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
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

 Route::resource('promotion','PromotionController');


// Route::post('promotion/apprent/{id}',[PromotionController::class,'show'])->name('apprent');

Route::get("search",[SearchController::class,'search']);
Route::get("searche",[SearchController::class,'searche']);


Route::resource('apprent', 'AppController', ['except' => 'edit']);
//Route::resource('apprent','AppController');

// Route::put('/apprent/edit/{id}',[AppController::class,'edit'])->name('edit');
Route::get('apprent/{id}/edit', 'AppController@edit')->name('apprents.edit');

Route::resource('brief',BriefController::class);
Route::resource('tache',TaskController::class);


Route::get('/brief/{id}/add-task',[BriefController::class,"add_tache"])->name("add-tache");
Route::resource('/assigner',assignerController::class);