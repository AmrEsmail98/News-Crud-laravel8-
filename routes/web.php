<?php

use App\Http\Controllers\NewsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/add-New',[NewsController::class,'addNews']);
Route::post('/add-New',[NewsController::class,'storeNews'])->name('News.store');
Route::get('/all-News',[NewsController::class,'News']);
Route::get('/',[NewsController::class,'welcome']);
Route::get('/edit-New/{id}',[NewsController::class,'editNews']);
Route::post('/update-New',[NewsController::class,'updateStudent'])->name('News.update');
Route::get('/delete-New/{id}',[NewsController::class,'deleteNew']);
