<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HttpPostController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('post',[HttpPostController::class,'index']);
Route::get('post/store',[HttpPostController::class,'store']);
Route::get('post/update',[HttpPostController::class,'update']);
Route::get('post/delete',[HttpPostController::class,'delete']);