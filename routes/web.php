<?php

use App\Http\Controllers\CategoryControlle;
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
Route::get('/categories',[CategoryControlle::class,'index']);
Route::get('/categories/create',[CategoryControlle::class,'create']);
Route::get('/categories/{category}',[CategoryControlle::class,'show']);

Route::post('/categories',[CategoryControlle::class,'store']);
Route::get('/categories/{category}/edit',[CategoryControlle::class,'edit']);
Route::put('/categories/{category}',[CategoryControlle::class,'update']);
Route::delete('/categories/{category}',[CategoryControlle::class,'destroy']);


