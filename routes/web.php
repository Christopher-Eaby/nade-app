<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', 'HomeController@index');

Route::get('/nades', 'NadesController@index');

Route::get('/404', 'NotFoundController@404');

Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@registerUser');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/nades', 'NadesAdminController@index');

Route::get('/admin/nades/create/{id}', 'NadesAdminController@add');
Route::post('/admin/nades/create', 'NadesAdminController@create');

Route::post('/admin/nades/update/{id}', 'NadesAdminController@update');

Route::get('/admin/nades/edit/{id}', 'NadesAdminController@edit');