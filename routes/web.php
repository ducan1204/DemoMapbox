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

Route::get('/', function () {
    return view('index');
});
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

Route::get('dashboar/maps', 'AdminController@maps')->name('maps');
Route::namespace('map')->group(function () {
    Route::get('dashboard/maps', 'MapController@index')->name('map.index');
    Route::get('dashboard/maps/create', 'MapController@create')->name('map.create');
    Route::get('students/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('students', 'StudentController@store')->name('student.store');
    Route::put('students', 'StudentController@update')->name('student.update');
    Route::get('students/destroy/{id}', 'StudentController@destroy')->name('student.destroy');
});

Route::get('/quy-hoach', 'IndexController@land')->name('quyhoach');
Route::get('/quy-hoach/{id}', 'IndexController@detail');
