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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Socialite Provider
Route::get('/login/{provider}', 'SocialController@redirectToProvider')
        ->where('provider','google|facebook|twitter');
Route::get('/login/callback/{provider}', 'SocialController@handleProviderCallback')
        ->where('provider','google|facebook|twitter');

Route::get('/companies', 'CompanyController@index');
Route::get('/companies/{id}', 'CompanyController@viewCompany'); //showing a specific company

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@viewProduct'); //showing a specific product

Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@viewUser'); //showing a specific user