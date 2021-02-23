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

Route::post('/FAction/join', 'FAction@join');

Route::post('/FAction/loginAction', 'FAction@loginAction');
Route::get('/FAction/logoutAction', 'FAction@logoutAction');

Route::post('/FAction/mIdCheck', 'FAction@mIdCheck');


Route::get('/FAction/list', 'FAction@list');
Route::get('/FAction/adm_set', 'FAction@admList');
Route::get('/FAction/view', 'FAction@show');
Route::get('/FAction/admView', 'FAction@admShow');
Route::get('/FAction/write', 'FAction@create');
Route::post('/FAction/write', 'FAction@create');


Route::post('/FAction/advice', 'FAction@advice');
Route::post('/FAction/update', 'FAction@update');
Route::post('/FAction/admUpdate', 'FAction@admUpdate');
Route::get('/FAction/priList', 'FAction@priListUpdate');
Route::get('/FAction/delete', 'FAction@delete');

Route::get('/s_result', 'FAction@s_result');