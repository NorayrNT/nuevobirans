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

Route::get('/', "PureController@global");
Route::get("/contact","PureController@global");
Route::get("/about","PureController@global");
Route::get("/education","PureController@global");
Route::post("/mail/contact-us","PureController@ContactUs");
