<?php

use App\Service;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as Auth;


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
Route::get('/bienvenue', function () {
    $services = Service::all();
    return view('index', ['services'=> $services]);
});

Auth::routes();



Route::post('login', 'LoginController@login')->name('login.user');




//dashboard

Route::get('/admindashboard', 'HomeController@adminpanelhome')->name('adminpanel.adminpanelhome')->middleware('admin');
Route::get('/cheifdashboard', 'HomeController@cheifpanelhome')->name('cheifpanel.cheifpanelhome')->middleware('chief');
Route::get('/meddashboard', 'HomeController@medpanelhome')->name('medpanel.medpanelhome')->middleware('med');
Route::get('/nursedashboard', 'HomeController@nursepanelhome')->name('nursepanel.nursepanelhome')->middleware('nurse');

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

//addRdv
Route::post('addrdv', 'RdvController@addRdv')->name('add.rdv');


//nurse functions
Route::get('/editnursepassword', 'HomeController@editnpassword')->name('medpanel.editmpassword')->middleware('nurse');
Route::get('/gestionrdv/{id}', 'RdvController@gestionRdv')->name('nursepanel.gestionrdv');
Route::post('/gestionrdv/{id}', 'RdvController@addMed')->name('add.med');
Route::get('/etatpatient', 'HomeController@etatpatient')->name('nursepanel.etatpatient');
Route::get('/etatactual', 'HomeController@etatactual')->name('nursepanel.etatactual');




//med Fuctions
Route::get('/rapport/{id}', 'HomeController@rèdigerapport')->name('medpanel.rapport')->middleware('med');
Route::get('/editmedpassword', 'HomeController@editmpassword')->name('medpanel.editmpassword')->middleware('med');
Route::get('/consultrdv/{id}', 'RdvController@consultRdv')->name('medpanel.consulteRdv');
Route::post('rediger-rapport/{id}', 'patientController@storeRapport')->name('rediger.rapport')->middleware('med');
Route::get('/etatpatient', 'HomeController@etatpatient')->name('medpanel.etatpatient');
Route::get('/etatactual', 'HomeController@etatactual')->name('medpanel.etatactual');

//cheif functions
Route::get('consulte-patient', 'patientController@showPatient')->name('show.patient')->middleware('chief');
Route::get('/caddmembre', 'HomeController@cheifajouterMembre')->name('cheifpanel.ajoutermembrecheif')->middleware('chief');
Route::get('/editcheifpassword', 'HomeController@editcpassword')->name('cheifpanel.editcpassword')->middleware('chief');
Route::get('/dossiermed/{id}', 'patientController@dossierMed')->name('cheifpanel.dossiermed')->middleware('chief');
Route::get('accept-patient/{id}', 'patientController@acceptPatient')->name('accept.patient')->middleware('chief');
Route::get('refuse-patient/{id}', 'patientController@refusePatient')->name('refuse.patient')->middleware('chief');
Route::get('deletepatient/{id}', 'patientController@deletepatient')->name('delete.patient')->middleware('chief');
Route::get('addpatient', 'HomeController@addpatient')->name('add.patient')->middleware('chief');
Route::post('addnewpatient', 'patientController@addpatient')->name('add.newpatient')->middleware('chief');





//admin functions
Route::get('consulte-user/{id}', 'userController@showMembers')->name('show.members');
Route::get('delete-user/{id}/{role_id}', 'userController@deleteMember')->name('delete.member');
Route::get('show-edit/{id}', 'userController@editMember')->name('show.edit.form');
Route::post('edit-user/{id}', 'userController@updateMember')->name('edit.member');
Route::post('edit-own', 'userController@modifyOwnInfo')->name('edit.own.info');
Route::post('edit-own-password', 'userController@modifypassword')->name('edit.own.password');
Route::get('delete-service/{id}', 'ServiceController@deleteService')->name('delete.service');
Route::get('edit-service/{id}', 'ServiceController@edit')->name('show.edit.service')->middleware('admin');
Route::post('update-service/{id}', 'ServiceController@modifyservice')->name('update.service')->middleware('admin');
Route::get('/editadminpassword', 'HomeController@editpassword')->name('adminpanel.editpassword')->middleware('admin');
Route::get('/consultservicea', 'HomeController@consultservicea')->name('adminpanel.consulterservicea')->middleware('admin');
Route::get('/mailbox', 'HomeController@mailbox')->name('adminpanel.mailbox')->middleware('admin');
Route::get('/read/{id}', 'HomeController@read')->name('adminpanel.read')->middleware('admin');
Route::get('/delete/{id}', 'ContactController@delete')->name('adminpanel.delete')->middleware('admin');





Route::post('store-contact', 'ContactController@store')->name('store.contact');
Route::post('update-img', 'userController@uploadphoto')->name('upload.photo');
