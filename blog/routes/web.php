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

Route::get('/', 'Front@main');

Route::get('/info/greeting', 'Front@info');
Route::get('/info/chart', 'Front@info');
Route::get('/info/m_accounting/account', 'Front@info');
Route::get('/info/m_accounting/fee', 'Front@info');
Route::get('/info/report/report01', 'Front@info');
Route::get('/info/report/report02', 'Front@info');
Route::get('/info/report/report03', 'Front@info');
Route::get('/info/report/report04', 'Front@info');
Route::get('/info/report/report05', 'Front@info');

Route::get('/business/insurance', 'Front@business');
Route::get('/business/buy', 'Front@business');
Route::get('/business/pa', 'Front@business');
Route::get('/business/advice', 'Front@business');
Route::get('/business/board', 'Front@business');
Route::get('/business/data_room', 'Front@business');

Route::get('/system/audit_system', 'Front@system');
Route::get('/system/operation', 'Front@system');

Route::get('/commu/c_board/board01', 'Front@commu');
Route::get('/commu/c_board/board02', 'Front@commu');
Route::get('/commu/c_board/board03', 'Front@commu');
Route::get('/commu/c_data_room/room01', 'Front@commu');
Route::get('/commu/c_data_room/room02', 'Front@commu');
Route::get('/commu/c_data_room/room03', 'Front@commu');
Route::get('/commu/c_data_room/room04', 'Front@commu');

Route::get('/support/b_infro', 'Front@support');
Route::get('/support/q_support/sp01', 'Front@support');
Route::get('/support/q_support/sp02', 'Front@support');
Route::get('/support/q_support/sp03', 'Front@support');
Route::get('/support/q_support/sp04', 'Front@support');
Route::get('/support/q_edu/ed01', 'Front@support');
Route::get('/support/q_edu/ed02', 'Front@support');
Route::get('/support/q_edu/ed03', 'Front@support');
Route::get('/support/q_edu/ed04', 'Front@support');
Route::get('/support/electron', 'Front@support');
Route::get('/support/care_room', 'Front@support');

Route::get('/edu/regular', 'Front@edu');
Route::get('/edu/web', 'Front@edu');
Route::get('/edu/edus', 'Front@edu');

Route::get('/login', 'Front@login');

Route::get('/join/join', 'Front@join');
Route::get('/join/business_join', 'Front@join');
Route::get('/join/human_join', 'Front@join');

Route::get('/s_result', 'Front@s_result');

Route::get('/m/index', 'Front@m');

Route::get('/m_info/m_greeting', 'Front@m_info');
Route::get('/m_info/m_chart', 'Front@m_info');
Route::get('/m_info/m_account', 'Front@m_info');
Route::get('/m_info/m_fee', 'Front@m_info');
Route::get('/m_info/m_report/m_report01', 'Front@m_info');
Route::get('/m_info/m_report/m_report02', 'Front@m_info');
Route::get('/m_info/m_report/m_report03', 'Front@m_info');
Route::get('/m_info/m_report/m_report04', 'Front@m_info');
Route::get('/m_info/m_report/m_report05', 'Front@m_info');

Route::get('/m/m_login', 'Front@m_login');

Route::get('/m_join/join', 'Front@m_join');
Route::get('/m_join/m_human_join', 'Front@m_join');
Route::get('/m_join/m_business_join', 'Front@m_join');

Route::get('/m_business/m_advice', 'Front@m_business');
Route::get('/m_business/m_advice01', 'Front@m_business');
Route::get('/m_business/m_advice02', 'Front@m_business');
Route::get('/m_business/m_insurance', 'Front@m_business');
Route::get('/m_business/m_buy', 'Front@m_business');
Route::get('/m_business/m_pa', 'Front@m_business');
Route::get('/m_business/m_board', 'Front@m_business');
Route::get('/m_business/m_data_room', 'Front@m_business');

Route::get('/m_support/m_b_info', 'Front@m_support');
Route::get('/m_support/m_care_room', 'Front@m_support');
Route::get('/m_support/m_electron', 'Front@m_support');
Route::get('/m_support/m_q_edu/m_ed01', 'Front@m_support');
Route::get('/m_support/m_q_edu/m_ed02', 'Front@m_support');
Route::get('/m_support/m_q_edu/m_ed03', 'Front@m_support');
Route::get('/m_support/m_q_edu/m_ed04', 'Front@m_support');
Route::get('/m_support/m_q_support/m_sp01', 'Front@m_support');
Route::get('/m_support/m_q_support/m_sp02', 'Front@m_support');
Route::get('/m_support/m_q_support/m_sp03', 'Front@m_support');
Route::get('/m_support/m_q_support/m_sp04', 'Front@m_support');
