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
    return view('indexx');
});












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/calendar', 'HomeController@calendar')->name('panel.calendar');
Route::get('/addmembre', 'HomeController@ajouterMembre')->name('panel.ajoutermembre');
Route::get('/addservice', 'HomeController@ajouterServices')->name('panel.ajouterservice');
Route::resource('Membre','MembreController');

