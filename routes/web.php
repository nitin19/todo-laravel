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

// PUBLIC HOMEPAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

// INSTANTIATE AUTH ROUTING AND ESTABLISH LOGOUT ROUTE
Route::auth();

// USER HOMEPAGE ROUTE
Route::get('/home', 'HomeController@index');

// USER TASKS ROUTES
Route::resource('/tasks', 'TasksController');
Route::get('/tasks-all', 'TasksController@index_all');
Route::get('/tasks-complete', 'TasksController@index_complete');
Route::get('/tasks-incomplete', 'TasksController@index_incomplete');