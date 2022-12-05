<?php

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Router;
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


Route::get('/hello', function () {
    return "hello";
});

Route::get('/', function () {
    return view('index');
});
Route::get('/curriculum', function () {
    return view('curriculum');
});


// 世界の時間

Route::get('/world-time', 'App\Http\Controllers\UtilityController@worldTime');

// おみくじ
Route::get('/omikuji', 'App\Http\Controllers\GameController@omikuji');

// モンティ・ホール問題
Route::get('/monty-hall', 'App\Http\Controllers\GameController@montyHall');

Route::get('/form', 'App\Http\Controllers\RequestSampleController@form');
Route::get('/query', 'App\Http\Controllers\RequestSampleController@query');


Route::get('/login', 'App\Http\Controllers\RequestSampleController@loginForm');
Route::post('/login', 'App\Http\Controllers\RequestSampleController@login')->name('login');



Route::resource('events', 'App\Http\Controllers\EventController');

// ハイローゲーム
Route::get('/hi-low', 'App\Http\Controllers\HiLowController@index')->name('hi-low');
Route::post('/hi-low', 'App\Http\Controllers\HiLowController@result');

// 写真
Route::resource('/photos', 'App\Http\Controllers\PhotoController');