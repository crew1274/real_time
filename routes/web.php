<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*demo測試路徑*/
Route::group(['prefix' => 'demo'], function () {
    Route::get('real', 'RealController@real');
    Route::get('random', 'RealController@random');
    Route::get('/', 'RecordController@index');
});

Route::get('/', function(){return view('welcome'); });
Route::get('dashboard', 'DashboardController@index');
Route::get('ecord', 'RecordController@index');
Route::resource('boot','SettingController');
Route::resource('peaktime','ConfigController');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

/*網路設定*/
Route::group(['prefix' => 'network'], function () {
    Route::get('wifi', 'NetworkController@wifi');
    Route::post('wifi', 'NetworkController@wifi_p');
    Route::get('static', 'NetworkController@staticip');
    Route::post('static', 'NetworkController@staticip_p');
    Route::get('dhcp', 'NetworkController@dhcp');
    Route::post('dhcp', 'NetworkController@dhcp_p');
    Route::get('/', 'NetworkController@index');
});

/*更換語系*/
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Auth::routes();
#Route::get('/home', 'HomeController@index');
