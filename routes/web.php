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
    return view('welcome');
});

Route::get('crearcensado', function () {
    return view('admin.censo.crearcensado');
});

Route::get('listarcensado', function () {
    return view('admin.censo.listarcensado');
});

Route::get('creartutor', function () {
    return view('admin.censo.creartutor');
});

Route::get('listartutor', function () {
    return view('admin.censo.listartutor');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
