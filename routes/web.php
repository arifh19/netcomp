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


Route::get('/', 'LandingController@index')->name('landing');

Route::get('/landing', function () {
    return view('welcome');
});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lomba/networking', 'LandingController@networking')->name('networking');
Route::get('/lomba/innovative', 'LandingController@innovative')->name('innovative');

Route::get('/peserta/tim', [
    'middleware' => ['auth', 'role:peserta'],
    'as' => 'peserta.tim',
    'uses' => 'TeamController@index'
]);

Route::get('/peserta/tim/edit', [
    'middleware' => ['auth', 'role:peserta'],
    'as' => 'peserta.tim.edit',
    'uses' => 'TeamController@edit'
]);

Route::get('/peserta/proposal', [
    'middleware' => ['auth', 'role:peserta'],
    'as' => 'peserta.proposal',
    'uses' => 'ProposalController@index'
]);

Route::post('/peserta/proposal', [
    'middleware' => ['auth', 'role:peserta'],
    'as' => 'peserta.proposal.store',
    'uses' => 'ProposalController@store'
]);

Route::post('/peserta/tim', [
    'middleware' => ['auth', 'role:peserta'],
    'as' => 'team.store',
    'uses' => 'TeamController@store'
]);

