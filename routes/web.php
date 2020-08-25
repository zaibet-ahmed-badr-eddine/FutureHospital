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

Route::get('/admindashboard', 'HomeController@adminpanelhome')->name('adminpanel.adminpanelhome');
Route::get('/cheifdashboard', 'HomeController@cheifpanelhome')->name('cheifpanel.cheifpanelhome');
Route::get('/meddashboard', 'HomeController@medpanelhome')->name('medpanel.medpanelhome');
Route::get('/nursedashboard', 'HomeController@nursepanelhome')->name('nursepanel.nursepanelhome');

Route::get('/calendar', 'HomeController@calendar')->name('adminpanel.calendar');
Route::get('/ccalendar', 'HomeController@cheifcalendar')->name('cheifpanel.calendarcheif');
Route::get('/mcalendar', 'HomeController@medcalendar')->name('medpanel.calendarmed');
Route::get('/ncalendar', 'HomeController@nursecalendar')->name('nursepanel.calendarnurse');

Route::get('/addmembre', 'HomeController@ajouterMembre')->name('adminpanel.ajoutermembre');
Route::get('/caddmembre', 'HomeController@cheifajouterMembre')->name('cheifpanel.ajoutermembrecheif');
Route::get('/addservice', 'HomeController@ajouterServices')->name('adminpanel.ajouterservice');

Route::get('/editadminpassword', 'HomeController@editpassword')->name('adminpanel.editpassword');
Route::get('/editadmininfos', 'HomeController@editmyinfos')->name('adminpanel.editmyinfos');
Route::get('/editcheifpassword', 'HomeController@editcpassword')->name('cheifpanel.editcpassword');
Route::get('/editcheifinfos', 'HomeController@editcinfos')->name('cheifpanel.editcinfos');
Route::get('/editmedpassword', 'HomeController@editmpassword')->name('medpanel.editmpassword');
Route::get('/editmedinfos', 'HomeController@editminfos')->name('medpanel.editminfos');
Route::get('/editnursepassword', 'HomeController@editmpassword')->name('medpanel.editmpassword');
Route::get('/editnurseinfos', 'HomeController@editninfos')->name('nursepanel.editninfos');

Route::resource('Membre','MembreController');

Route::get('/adminconsultc', 'HomeController@adminconsultchief')->name('adminpanel.consulterchefservicea');
Route::get('/adminconsultm', 'HomeController@adminconsultmed')->name('adminpanel.consultermedcina');
Route::get('/adminconsultn', 'HomeController@adminconsultnurse')->name('adminpanel.consulterinfirmierea');

Route::get('/cheifconsultm', 'HomeController@cheifconsultmed')->name('cheifpanel.consultermedcinc');
Route::get('/cheifconsultn', 'HomeController@cheifconsultnurse')->name('cheifpanel.consulterinfirmierec');



Route::post('loginUser', 'loginController@login')->name('login.user');
Route::post('addnewmember', 'loginController@addMember')->name('add.user');
Route::post('addnewmservice', 'servicesController@addService')->name('add.service');