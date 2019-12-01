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



Route::get('/','AdminController@index')->name('home.index');



Route::get('admin/users','UsersController@index')->name('users.index');

Route::get('admin/groups','GroupController@index')->name('groups.index');

Route::get('admin/group/create','GroupController@create')->name('groups.create');

Route::post('admin/group/store','GroupController@store')->name('groups.store');

Route::delete('admin/group/delete/{id}','GroupController@destroy')->name('groups.destroy');

Route::get('admin/user/create','UsersController@create')->name('users.create');

Route::post('admin/user/store','UsersController@store')->name('users.store');

Route::delete('admin/user/delete/{id}','UsersController@destroy')->name('users.destroy');

Route::get('admin/user/edit/{id}','UsersController@edit')->name('users.edit');

Route::put('admin/user/update/{id}','UsersController@update')->name('users.update');