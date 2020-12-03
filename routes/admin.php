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
define('PAGINATION_COUNT',10);

Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'],function (){
Route::get('/','DashboardController@index')->name('admin.dashboard');

############################### Begin Languages Routs ######################
    Route::group(['prefix'=>'languages'],function (){
        Route::get('/','LanguagesController@index')->name('admin.languages');
        Route::get('create','LanguagesController@create')->name('admin.laguages.create');
        Route::post('store','LanguagesController@store')->name('admin.laguages.store');

        Route::get('edit/{id}','LanguagesController@edit')->name('admin.laguages.edit');
        Route::post('update/{id}','LanguagesController@update')->name('admin.laguages.update');

        Route::get('delete/{id}','LanguagesController@destroy')->name('admin.laguages.delete');

    });
    ############################### End Languages Routs ########################

    ############################### Begin Main Catigories Routs ######################
    Route::group(['prefix'=>'MainCategories'],function (){
        Route::get('/','MainCategoriesController@index')->name('admin.MainCategories');
        Route::get('create','MainCategoriesController@create')->name('admin.MainCategories.create');
        Route::post('store','MainCategoriesController@store')->name('admin.MainCategories.store');

        Route::get('edit/{id}','MainCategoriesController@edit')->name('admin.MainCategories.edit');
        Route::post('update/{id}','MainCategoriesController@update')->name('admin.MainCategories.update');

        Route::get('delete/{id}','MainCategoriesController@destroy')->name('admin.MainCategories.delete');

    });
    ############################### End Main Catigories Routs ########################
});

Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'],function (){
    Route::get('login','LoginController@getLogin')->name('get.admin.login');
    Route::post('login','LoginController@login')->name('admin.login');
});






