<?php

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
    return view('home');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/author', function () {
    return view('author_home');
});

Route::get('/add', function () {
    return view('add_article');
});

Route::get('/edit', function () {
    return view('edit_article');
});
