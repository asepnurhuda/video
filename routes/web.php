<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('frontend');
Route::get('/video/{id}/category', [WebController::class, 'show'])->name('frontend.show');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}/delete', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/category/{id}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('video.index');
Route::get('/video/add', [App\Http\Controllers\VideoController::class, 'add'])->name('video.add');
Route::post('/video/store', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store');
Route::get('/video/{id}/edit', [App\Http\Controllers\VideoController::class, 'edit'])->name('video.edit');
Route::get('/video/{id}/delete', [App\Http\Controllers\VideoController::class, 'delete'])->name('video.delete');
Route::patch('/video/{id}/update', [App\Http\Controllers\VideoController::class, 'update'])->name('video.update');
