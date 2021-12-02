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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/', 'PublicController\PublicCategoryController@index');




Route::group(['middleware' => ['auth']], function () {

    Route::get('home', function () {
    return view('home');
    });
    Route::get('admin/categories/create', 'AdminController\CategoriesController@create');
    Route::post('admin/categories/store', 'AdminController\CategoriesController@store');
    Route::get('admin/categories', 'AdminController\CategoriesController@index');
    Route::delete('admin/categories/delete/{id}', 'AdminController\CategoriesController@destroy');
    Route::get('admin/categories/edit/{id}', 'AdminController\CategoriesController@edit');
    Route::put('admin/categories/update/{id}', 'AdminController\CategoriesController@update');

    Route::get('admin/stores/create', 'AdminController\StoresController@create');
    Route::post('admin/stores/store', 'AdminController\StoresController@store');
    Route::get('admin/stores', 'AdminController\StoresController@index');
    Route::get('admin/stores/deleted', 'AdminController\StoresController@indexDeleted');
    Route::get('admin/stores/search', 'AdminController\StoresController@search');
    Route::get('admin/stores/searchDelete', 'AdminController\StoresController@searchDeleted');
    Route::delete('admin/stores/delete/{id}', 'AdminController\StoresController@destroy');
    Route::get('admin/stores/edit/{id}', 'AdminController\StoresController@edit');
    Route::get('admin/stores/restore/{id}', 'AdminController\StoresController@restore');
    Route::put('admin/stores/update/{id}', 'AdminController\StoresController@update');

    Route::get('admin/storesreview', 'AdminController\StoresController@indexreview');
    Route::get('admin/storesreview/search', 'AdminController\StoresController@searchreview');


});

Route::get('public/store/{id}', 'PublicController\PublicStoreController@index');
Route::post('public/rate/{id}', 'PublicController\PublicStoreController@store');
Route::get('public/detail/{id}', 'PublicController\PublicStoreController@detail');
Route::get('public/store/search/{id}', 'PublicController\PublicStoreController@search');

Route::get('public/category/search', 'PublicController\PublicCategoryController@search');

