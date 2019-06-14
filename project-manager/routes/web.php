<?php

/*
Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client secret: 3r1Him2SsuWULEHoDiusCFmPdjpilAU3mAwIyhZn
Password grant client created successfully.
Client ID: 2
Client secret: WQt58I1Oc8SOTKbELfNWW1VOT4jCTGyiEa526WU6

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/api/tasks','tasksController');
