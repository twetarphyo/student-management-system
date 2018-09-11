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

Route::get('/', 'StudentController@index')->name('home');

Route::get('/student/create', 'StudentController@create');

Route::post('/store', 'StudentController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/update/{student}','StudentController@update')->name('update');

Route::post('/update/{student}','StudentController@edit');

// Route::resource('student', 'StudentController');

Route::delete('/delete/{student}', 'StudentController@delete')->name('delete');

// Route::get('/SweetAlert', 'StudentController@alert');

// Route::get('/edit/{id}', 'StudentController@editData')->name('edit');
//
// Route::post('/update', 'StudentController@updateData')->name('update');
