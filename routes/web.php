<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\a;
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
/*
Route::get('/', function () {
    echo"Selamat Datang";
});
*/
Route::get('/about', function () {
    echo"Febrian Dani Ritonga<br>";
    echo"2141720070";
});
Route::get('/artikel/{page?}', function ($page=1) {
    return "Halaman artikel dengan ID ".$page;
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/artikel/{page?}', [ArticleController::class, 'artikel']);