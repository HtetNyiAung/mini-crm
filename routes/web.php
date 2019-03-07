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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//view Company Table
Route::get('/view','CompanyController@index');

//create company Table
Route::get('/create','CompanyController@create');

Route::post('/add','CompanyController@store');

//update Company Table
Route::get('/edit/{id}','CompanyController@edit');
Route::post('/update/{id}','CompanyController@update');

//delete company Table
Route::get('/delete/{id}','CompanyController@destroy');

//view Employee Table
Route::get('/empview','EmployeeController@index');

//create Employee Table
Route::get('/empcreate','EmployeeController@create');
 Route::post('/empadd','EmployeeController@store');

 //update Employee Table
Route::get('/empedit/{id}','EmployeeController@edit');
Route::post('/empupdate/{id}','EmployeeController@update');

//delete Employee Table
Route::get('/empdelete/{id}','EmployeeController@destroy');
