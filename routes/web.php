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
Route::get('/example','GeneralController@retrieveSteamSpyTop100InTwoWeeks');

Route::get('/login/{provider}', 'SocialController@redirectToProvider')
        ->where('provider','google|facebook|twitter');
Route::get('/login/callback/{provider}', 'SocialController@handleProviderCallback')
        ->where('provider','google|facebook|twitter');

Route::get('/companies', 'CompanyController@index');
Route::get('/company/{id}', 'CompanyController@viewCompany');
Route::get('/company_create', 'CompanyController@beforeCreateNewCompany');
Route::post('/company_create', 'CompanyController@createNewCompany'); 

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@viewProduct');
Route::get('/product_create', 'ProductController@beforeCreateNewProduct')->middleware('auth');
Route::post('/product_create', 'ProductController@createNewProduct')->middleware('auth');
Route::get('/product_edit/{id}', 'ProductController@beforeEditProduct')->middleware('auth');
Route::post('/product_edit/{id}', 'ProductController@editProduct')->middleware('auth');

Route::get('/users', 'UserController@index')->middleware('auth');;
Route::get('/user_update/{id}', 'UserController@viewUser')->middleware('auth');
Route::post('/user_update/{id}', 'UserController@updateUser')->middleware('auth');

Route::get('/genres', 'GenreController@index');
Route::get('/genre/{id}', 'GenreController@viewGenre');
Route::get('/genre_create', 'GenreController@beforeCreateNewGenre')->middleware('auth');
Route::post('/genre_create', 'GenreController@createNewGenre')->middleware('auth');

Route::get('/websites', 'WebsiteController@index');
Route::get('/website/{id}', 'WebsiteController@viewWebsite');
Route::get('/website_create', 'WebsiteController@beforeCreateNewWebsite')->middleware('auth');
Route::post('/website_create', 'WebsiteController@createNewWebsite')->middleware('auth');
Route::get('/website_edit/{id}', 'WebsiteController@beforeEditWebsite')->middleware('auth');
Route::post('/website_edit/{id}', 'WebsiteController@editWebsite')->middleware('auth');
