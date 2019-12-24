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
        Route::get('/company/{id}', 'CompanyController@viewCompany'); //showing a specific company
        Route::post('/company_create', 'CompanyController@createNewCompany'); //create a new company - contains admin restrictions
        
        Route::get('/products', 'ProductController@index');
        Route::get('/products/{id}', 'ProductController@viewProduct'); //showing a specific product with description and the genres tags
        Route::post('/product_create', 'ProductController@createNewProduct'); //create a new product - contains admin restrictions
        
        Route::get('/users', 'UserController@index');
        Route::get('/user/{id}', 'UserController@viewUser'); //showing a specific user
        Route::post('/user_update', 'UserController@updateUser'); //updates the user - contains admin restrictions
        
        Route::get('/genres', 'GenreController@index');
        Route::get('/genre/{id}', 'GenreController@viewGenre'); //showing a specific company, indicating the games
        Route::post('/genre_create', 'GenreController@createNewGenre'); //create a new company - contains admin restrictions