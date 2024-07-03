<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\playerController;
use Database\Factories\players;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[playerController::class,'fatchplayer']);
Route::get('/view/{id}',[playerController::class,'viewplayer'])->name('view');
Route::get('/delete/{id}',[playerController::class,'deleteplayer'])->name('delete');
Route::get('/update/{id}',[playerController::class,'updateplayer'])->name('update');
Route::get('/updateplayer/{id}',[playerController::class,'updateplayerpage'])->name('updateplayer');
Route::post('/add',[playerController::class,'addplayer'])->name('add');


Route::get('/form',function(){
 return view('form');  
})->name('form');