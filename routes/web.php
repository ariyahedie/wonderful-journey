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

Route::get('/', 'ArticlesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/category/{categories}', 'ArticlesController@indexCategoryBased');

Route::post('/store_user', 'UsersController@store');
Route::post('/login_user', 'AuthenticationsController@login');
Route::get('/signup', 'UsersController@create');
Route::get('/login', 'AuthenticationsController@index');

Route::group(['middleware' => 'CekLoginMiddleware'], function(){
    Route::get('/user/home', 'ArticlesController@indexUserBasedInUserGreeting');
    Route::get('/admin/home', 'ArticlesController@indexUserBasedInAdminGreeting');

    Route::get('/user/blog/create_blog', 'ArticlesController@create');
    Route::post('/store_blog', 'ArticlesController@store');

    Route::get('/user/blog', 'ArticlesController@indexUserBased');
    Route::delete('/user/blog/{articles}', 'ArticlesController@destroy');
    Route::get('/user/blog/{articles}', 'ArticlesController@show');
    
    Route::get('/user/profile', 'UsersController@show');
    Route::get('/user/profile/{users}/edit', 'UsersController@edit');
    Route::patch('/user/profile/{users}', 'UsersController@update');

    Route::get('/admin/User', 'UsersController@index');
    Route::get('/admin/Admin', 'UsersController@index_admin');
    Route::get('/admin/Admin/{users}', 'UsersController@showAdmin');
    Route::delete('/admin/Admin/{users}', 'UsersController@destroy');
    Route::get('/admin/User/{users}', 'UsersController@showAdmin');
    Route::delete('/admin/User/{users}', 'UsersController@destroy');

    Route::get('/logout', 'AuthenticationsController@logout')->name('logout');
});

Route::get('/{articles}', 'ArticlesController@show');







