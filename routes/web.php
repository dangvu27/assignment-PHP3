<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class,'index']);

Route::get('/category/{id}', [ArticleController::class,'category']);

Route::get('/article/{id}', [ArticleController::class,'articleDetail']);

Route::get('/search', [SearchController::class, 'search']);
