<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\TopRatedController;
use App\Http\Controllers\SearchController;



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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/demo', [DemoController::class, 'demo'])->name('demo');
Route::get('/popular', [PopularController::class, 'index'])->name('popular');
Route::get('/top-rated', [TopRatedController::class, 'index'])->name('top-rated');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/recommend', [SearchController::class, 'recommend'])->name('recommend');


