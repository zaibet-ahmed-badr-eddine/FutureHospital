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



Route::post('loginUser', 'LoginController@login')->name('login.user');



//dashboard

Route::get('/admindashboard', 'HomeController@adminpanelhome')->name('adminpanel.adminpanelhome');
Route::get('/cheifdashboard', 'HomeController@cheifpanelhome')->name('cheifpanel.cheifpanelhome');
Route::get('/meddashboard', 'HomeController@medpanelhome')->name('medpanel.medpanelhome');
Route::get('/nursedashboard', 'HomeController@nursepanelhome')->name('nursepanel.nursepanelhome');

//calendar

Route::get('/calendar', 'HomeController@calendar')->name('adminpanel.calendar');
Route::get('/ccalendar', 'HomeController@cheifcalendar')->name('cheifpanel.calendarcheif');
Route::get('/mcalendar', 'HomeController@medcalendar')->name('medpanel.calendarmed');
Route::get('/ncalendar', 'HomeController@nursecalendar')->name('nursepanel.calendarnurse');


Route::get('/addmembre', 'HomeController@ajouterMembre')->name('adminpanel.ajoutermembre');
Route::get('/addservice', 'HomeController@ajouterServices')->name('adminpanel.ajouterservice');




//edit user infos
Route::get('/editmyinfos', 'HomeController@editmyinfos')->name('adminpanel.editmyinfos');














Route::post('addnewmember', 'userController@addMember')->name('add.user');
Route::post('addnewmservice', 'ServiceController@addservice')->name('add.service');


//nurse functions
Route::get('/editnursepassword', 'HomeController@editmpassword')->name('medpanel.editmpassword');
Route::get('/gestionrdv/{id}', 'HomeController@gestionRdv')->name('nursepanel.gestionrdv');




//med Fuctions
Route::get('/rapport', 'HomeController@rèdigerapport')->name('medpanel.rapport');
Route::get('/editmedpassword', 'HomeController@editmpassword')->name('medpanel.editmpassword');
Route::get('/consultrdv', 'HomeController@consultRdv')->name('medpanel.consulteRdv');



//cheif functions
Route::get('consulte-patient', 'PatientController@showPatient')->name('show.patient');
Route::get('/caddmembre', 'HomeController@cheifajouterMembre')->name('cheifpanel.ajoutermembrecheif');
Route::get('/editcheifpassword', 'HomeController@editcpassword')->name('cheifpanel.editcpassword');




//admin functions
Route::get('consulte-user/{id}', 'userController@showMembers')->name('show.members');
Route::get('delete-user/{id}/{role_id}', 'userController@deleteMember')->name('delete.member');
Route::get('show-edit/{id}', 'userController@editMember')->name('show.edit.form');
Route::post('edit-user/{id}', 'userController@updateMember')->name('edit.member');
Route::post('edit-own', 'userController@modifyOwnInfo')->name('edit.own.info');
Route::post('edit-own-password', 'userController@modifypassword')->name('edit.own.password');
Route::get('delete-service/{id}', 'ServiceController@deleteService')->name('delete.service');
Route::get('edit-service/{id}', 'ServiceController@edit')->name('show.edit.service'); 
Route::post('update-service/{id}', 'ServiceController@modifyservice')->name('update.service');
Route::get('/editadminpassword', 'HomeController@editpassword')->name('adminpanel.editpassword');
Route::get('/consultservicea', 'HomeController@consultservicea')->name('adminpanel.consulterservicea');

