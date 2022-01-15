<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ==========Files Routes =============
//to list 
Route::get('files' , 'FilesController@index')->name('files.index');
//Create/Store
Route::get('files/create' , 'FilesController@create')->name('files.create');;
Route::post('files/create' , 'FilesController@store')->name('files.store');;
//Edite / update
Route::get('files/edit/{id}' , 'FilesController@edit')->name('files.edit');;
Route::post('files/edit/{id} ', 'FilesController@update')->name('files.update');;
//show item
Route::get('files/show/{id}' , 'FilesController@show')->name('files.show');;
//DElete
Route::get('files/del/{id}' , 'FilesController@destroy')->name('files.destroy');
//Download
Route::get('files/download/{id}' , "FilesController@download")->name('files.download');
//======================END Files Routes ============

