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
Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');

Route::middleware('auth:admin')->group(function(){
  // Tulis routemu di sini.                                      
});
Route::middleware('auth:user')->group(function(){
  // Tulis routemu di sini.                                      
});   

Route::get('/', 'OrganizationController@index')->name('organization.index');	
Route::get('/organization/add', 'OrganizationController@create')->name('organization.create');	
Route::post('/organization/store', 'OrganizationController@store')->name('organization.store');	
Route::get('/organization/detail/{id}', 'OrganizationController@detail')->name('organization.detail');	
Route::get('/organization/edit/{id}', 'OrganizationController@edit')->name('organization.edit');	
Route::post('/organization/update/{id}', 'OrganizationController@update')->name('organization.update');	
Route::get('/organization/delete/{id}', 'OrganizationController@destroy')->name('organization.delete');	
