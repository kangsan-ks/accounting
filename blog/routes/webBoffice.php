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

Route::get('/boffice/login', 'Boffice@login');
Route::post('/boffice/loginAction', 'Boffice@loginAction');
Route::get('/boffice/logoutAction', 'Boffice@logoutAction');

Route::get('/boffice', 'Boffice@main');
Route::get('/boffice/list', 'Boffice@list');
Route::get('/boffice/adm_set', 'Boffice@admList');
Route::get('/boffice/view', 'Boffice@show');
Route::get('/boffice/admView', 'Boffice@admShow');
Route::get('/boffice/write', 'Boffice@write');


Route::post('/boffice/create', 'Boffice@create');
Route::post('/boffice/update', 'Boffice@update');
Route::post('/boffice/admUpdate', 'Boffice@admUpdate');
Route::get('/boffice/priList', 'Boffice@priListUpdate');
Route::get('/boffice/delete', 'Boffice@delete');
