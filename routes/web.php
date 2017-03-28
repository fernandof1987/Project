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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'ProjectsController@index');//->middleware('auth');

Route::group(['prefix'=>'projects'], function() {

    Route::get('', ['as' => 'projects.index', 'uses' => 'ProjectsController@index']);//->middleware('auth');
    Route::get('/{id}', ['as' => 'projects.show', 'uses' => 'ProjectsController@show']);//->middleware('auth');

});


Route::get('/tasks', 'TasksController@index');//->middleware('auth');