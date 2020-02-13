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
Route::post('/worker-family-detail-delete','IndexTableController@deleteWorkerDetail');
