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
    return view('welcome');
});

Route::resource('/kampus', 'KampusController');

Route::get('/kampus/create', 'KampusController@create')
    ->name('kampuses.create');

Route::post('/kampus', 'KampusController@store')
    ->name('kampuses.store');

Route::get('/kampuses', 'KampusController@index')
    ->name('kampuses.index');

Route::get('/kampuses/{kampus}', 'KampusController@show')
    ->name('kampuses.show');

Route::get('/kampuses/{kampus}/edit', 'KampusController@edit')
    ->name('kampuses.edit');

Route::patch('/kampuses/{kampus}', 'KampusController@update')
    ->name('kampuses.update');

Route::delete('/kampuses/{kampus}', 'KampusController@destroy')
    ->name('kampuses.destroy');

Route::get('/kampuseses/compare', 'KampusController@compare')
    ->name('kampuses.compare');
