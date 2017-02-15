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
    Route::get('real', 'RealtimeController@real');
    Route::get('random', 'RealtimeController@random');
    Route::get('/', function () {
    return view('form');
});
});

/*網路設定*/
Route::group(['prefix' => 'network'], function () {
    Route::post('wifi', ['as' => 'network/wifi', 'uses' => 'NetworkController@wifi']);
    Route::post('staticip', ['as' => 'network/staticip', 'uses' => 'NetworkController@staticip']);
    Route::post('dhcp', ['as' => 'network/dhcp', 'uses' => 'NetworkController@dhcp']);
    Route::get('/', 'NetworkController@index');
});
Route::get('test', function(){return view('test'); });
Route::get('/', function(){return view('welcome'); });
Route::get('dashboard', 'DashboardController@index');
Route::get('record', 'RecordController@index');
Route::resource('boot','SettingController');
Route::resource('peaktime','ConfigController');

Route::get('profile', 'ProfileController@index');
Route::post('profile/update', 'ProfileController@update');

Route::get('demand', 'DemandController@index');
Route::post('demand', 'DemandController@store');
Route::get('offload', 'ControlController@index');
Route::get('control', 'ControlController@index');


Route::get('documentation', 'DashboardController@documentation');

/*更換語系*/
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Auth::routes();
#Route::get('/home', 'HomeController@index');
