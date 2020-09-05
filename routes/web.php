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

// home page
Route::get('/', 'CatalogController@index')->name('catalog');
//show post
Route::get('post/{id}','CatalogController@show')->name('post.show');

//show post edit page and send data from method POST
Route::get('posts/edit/{id}','CatalogController@edit')->name('post.edit');
Route::post('posts/edit/{id}','CatalogController@update')->name('post.update');

//show post create page and send data from method POST
Route::get('posts/create','CatalogController@create')->name('post.create');
Route::post('posts/create','CatalogController@store')->name('post.store');

// delete post functional
Route::delete('post/{id}','CatalogController@destroy')->name('post.delete');
