<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'project', 'namespace' => 'Project'], function()
{
    Route::resource('project', 'ProjectController@index');
    //get、post等按顺序，按分组些，不能穿插写
    Route::get('/', 'ProjectController@index');

});

Route::group(['prefix' => 'home', 'namespace' => 'Home'], function()
{
    Route::resource('home', 'HomeController@index');
    //get、post等按顺序，按分组些，不能穿插写
    Route::get('/', 'HomeController@index');
    Route::get('/back', 'BackController@index');

});

Route::group(['prefix' => 'user', 'namespace' => 'User'], function()
{
    Route::resource('user', 'User@index');
    //get、post等按顺序，按分组些，不能穿插写
    Route::get('/', 'ConsultantController@index');
    Route::get('/consultant', 'ConsultantController@index');
});