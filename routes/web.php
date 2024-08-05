<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsMember;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminCategoryController;

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
Route::get('login', [AuthenController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthenController::class, 'login']);

Route::get('register', [AuthenController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthenController::class, 'register']);

Route::get('logout', [AuthenController::class, 'logout'])->name('logout');


Route::get('member', [MemberController::class, 'index'])->name('member.dashboard')->middleware(['auth', IsMember::class]);
Route::get('/', [MemberController::class,'index']);
Route::get('/category/{id}', [ArticleController::class,'category']);
Route::get('/article/{id}', [ArticleController::class,'articleDetail']);
Route::get('/search', [SearchController::class, 'search']);


Route::get('admin', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware(['auth', IsAdmin::class]);

Route::resource('admin/articles', AdminController::class)->middleware(['auth', IsAdmin::class]);

Route::resource('admin/categories', AdminCategoryController::class)->middleware(['auth', IsAdmin::class]);