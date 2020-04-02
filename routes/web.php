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


Route::get("/","dbase@start");
Route::get("index","dbase@start");

Route::get("logout","dbase@logout");

Route::get('signup', function () {
    return view('signup');
});

Route::get('dashboard', "dbase@viewdashboard");



Route::get('choose', 'slotController@choose');
Route::get('leave', 'slotController@leave');


Route::post('submitsign', 'dbase@signup');

Route::post('submitlogin', 'dbase@login');
