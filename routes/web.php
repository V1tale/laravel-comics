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
    $title = config('comics.title');
    $description = config('comics.description');
    $thumb = config('comics.thumb');
    $price = config('comics.price');
    $series = config('comics.series');
    $sales = config('comics.sale_date');
    $type = config('comics.type');
    // $artists = config('comics.artists');
    // $writers = config('comics.writers');

    return view('home', compact('title', 'description', 'thumb', 'price', 'series', 'sales', 'type'));
})->name("home");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles");

Route::get('/fans', function () {
    return view('fans');
})->name("fans");

Route::get('/games', function () {
    return view('games');
})->name("games");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/tv', function () {
    return view('tv');
})->name("tv");
Route::get('/videos', function () {
    return view('videos');
})->name("videos");
Route::get('/news', function () {
    return view('news');
})->name("news");
