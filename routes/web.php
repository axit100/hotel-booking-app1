<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('/productsData', [HomeController::class, 'productsData'])->name('productsData');
Route::get('/view/{id}', [HomeController::class, 'view'])->name('view');

