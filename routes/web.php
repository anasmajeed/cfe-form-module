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

Route::get('/','IndexTableController@loadMainPage');
Route::post('/index-table','IndexTableController@post');
Route::get('/home','HomeController@index');
Route::get('/view/{index_id}','HomeController@view');
Route::post('/worker-personal-details','WorkerPersonalDetailController@post');
Route::post('/worker-bank-security-details','WorkerBankSecurityDetailController@post');
Route::post('/factory-service-details','FactoryDetailController@post');
Route::post('/factory-death-manager-details','FactoryDeathManagerDetailController@post');
Route::post('/student-personal-details','StudentPersonalDetailController@post');


//delete calls
Route::post('/worker-family-detail-delete','IndexTableController@deleteWorkerDetail');
Route::post('/service-detail-delete','FactoryDetailController@deleteServiceDetail');
