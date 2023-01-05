<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Article;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/search', [HomeController::class, 'search']);

Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/author', [ArticleController::class, 'index'])->middleware('auth');

Route::get('/add', [ArticleController::class, 'addPage'])->middleware('auth');
Route::post('/add', [ArticleController::class, 'insert'])->middleware('auth');

Route::get('/edit/{id}', [ArticleController::class, 'editPage'])->middleware('auth');
Route::post('/edit', [ArticleController::class, 'update'])->middleware('auth');

Route::post('/delete', [ArticleController::class, 'delete'])->middleware('auth');

Route::get('/login', [AuthController::class, 'loginPage'])->middleware('guest');
Route::post('/login', [AuthController::class, 'loginHandler'])->middleware('guest');

Route::get('/register', [AuthController::class, 'registerPage'])->middleware('guest');
Route::post('/register', [AuthController::class, 'registerHandler'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);
