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

define('PAGINATION_COUNT', 10);

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route:: get('/', 'DashboardController@index')->name('admin.dashboard');

    ############################### Begin Languages Routs ######################

    Route::group(['prefix' => 'languages'], function () {
        Route:: get('/', 'LanguagesController@index')->name('admin.languages');
        Route:: get('create', 'LanguagesController@create')->name('admin.laguages.create');
        Route:: post('store', 'LanguagesController@store')->name('admin.laguages.store');

        Route:: get('edit/{id}', 'LanguagesController@edit')->name('admin.laguages.edit');
        Route:: post('update/{id}', 'LanguagesController@update')->name('admin.laguages.update');

        Route:: get('delete/{id}', 'LanguagesController@destroy')->name('admin.laguages.delete');
    });
    ############################### End Languages Routs ########################

    ############################### Begin Main Catigories Routs ######################

    Route::group(['prefix' => 'MainCategories'], function () {
        Route:: get('/', 'MainCategoriesController@index')->name('admin.MainCategories');
        Route:: get('create', 'MainCategoriesController@create')->name('admin.MainCategories.create');
        Route:: post('store', 'MainCategoriesController@store')->name('admin.MainCategories.store');

        Route:: get('edit/{id}', 'MainCategoriesController@edit')->name('admin.MainCategories.edit');
        Route:: post('update/{id}', 'MainCategoriesController@update')->name('admin.MainCategories.update');

        Route:: get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.MainCategories.delete');

        Route:: get('changeStatus/{id}', 'MainCategoriesController@changeStatus')->name('admin.MainCategories.status');
    });
    ############################### End Main Categories Routs ########################


    ############################### Begin Sub Catigories Routs ######################

    Route::group(['prefix' => 'SubCategories'], function () {
        Route:: get('/', 'SubCategoriesController@index')->name('admin.subCategories');
        Route:: get('create', 'SubCategoriesController@create')->name('admin.subCategories.create');
        Route:: post('store', 'SubCategoriesController@store')->name('admin.subCategories.store');

        Route:: get('edit/{id}', 'SubCategoriesController@edit')->name('admin.subCategories.edit');
        Route:: post('update/{id}', 'SubCategoriesController@update')->name('admin.subCategories.update');

        Route:: get('delete/{id}', 'SubCategoriesController@destroy')->name('admin.subCategories.delete');

        Route:: get('changeStatus/{id}', 'SubCategoriesController@changeStatus')->name('admin.subCategories.status');
    });
    ############################### End Sub Categories Routs ########################

    ############################### Begin Vendors Routs ######################

    Route::group(['prefix' => 'Vendors'], function () {
        Route:: get('/', 'VendorsController@index')->name('admin.vendors');
        Route:: get('create', 'VendorsController@create')->name('admin.vendors.create');
        Route:: post('store', 'VendorsController@store')->name('admin.vendors.store');

        Route:: get('edit/{id}', 'VendorsController@edit')->name('admin.vendors.edit');
        Route:: post('update/{id}', 'VendorsController@update')->name('admin.vendors.update');

        Route:: get('delete/{id}', 'VendorsController@destroy')->name('admin.vendors.delete');

        Route:: get('changeStatus/{id}', 'VendorsController@changeStatus')->name('admin.vendors.status');

    });
    ############################### End Vendors Routs ########################

    ############################### Begin Product Routs ######################

    Route::group(['prefix' => 'Product'], function () {
        Route:: get('/', 'ProductController@index')->name('admin.product');
        Route:: get('create', 'ProductController@create')->name('admin.product.create');
        Route:: post('store', 'ProductController@store')->name('admin.product.store');

        Route:: get('edit/{id}', 'ProductController@edit')->name('admin.product.edit');
        Route:: post('update/{id}', 'ProductController@update')->name('admin.product.update');

        Route:: get('delete/{id}', 'ProductController@destroy')->name('admin.product.delete');

        Route:: get('changeStatus/{id}', 'ProductController@changeStatus')->name('admin.product.status');

        Route::get('image/{id}','ProductController@fileCreate')->name('admin.product.image');
        Route::post('image/upload/store/{post}','ProductController@fileStore')->name('admin.product.image.store');
        Route::delete('image/delete/{image}','ProductController@fileDestroy')->name('admin.product.image.destroy');


    });
    ############################### End Vendors Routs ########################
});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function () {
    Route:: get('login', 'LoginController@getLogin')->name('get.admin.login');
    Route:: post('login', 'LoginController@login')->name('admin.login');
});
