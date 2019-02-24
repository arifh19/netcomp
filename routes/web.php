<?php

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
    return view('comingsoon');
});

Route::get('/landing', function () {
    return view('welcome');
});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/peserta/tim', 'TeamController@index')->name('peserta.tim');
Route::get('/peserta/tim/edit', 'TeamController@edit')->name('peserta.tim.edit');
Route::get('/peserta/proposal', 'ProposalController@index')->name('peserta.proposal');
Route::post('/peserta/proposal', 'ProposalController@store')->name('peserta.proposal.store');
Route::post('/team', 'TeamController@store')->name('team.store');
