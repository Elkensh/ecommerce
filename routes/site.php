<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/test', function () {
    return view('front.hom');
}); */



Route::group(['middleware' => 'verifyUser'], function () {



    ///////////////////// Routes Authentication && Verification ///////////////////////////////////////
    Route::group(['namespace' => 'Site' , 'middleware' =>'auth'], function () {

        Route::get('wishlists{productId}','WishlistController@store')->name('wishlist.store');
        Route::get('wishlist{productId}','WishlistController@destroy')->name('wishlist.delete');
        Route::get('wishlist','WishlistController@index')->name('site.wishlist');

        Route::get('cart','CartController@index')->name('cart');
        Route::get('cart{product_id}','CartController@addToCart')->name('addToCart');

        Route::get('profile',function(){
            return 'you are authenticated';
        });

        Route::get('profile',function(){
            return view('front.cart')->name('cart');
        });

    });

    ///////////////////// Routes Authentication ///////////////////////////////////////

    Route::group(['namespace' => 'Site'], function () {

        Route::get('/','SiteController@home')->name('site');
        Route::get('/categories{slug}','CategoryController@productsBySlug')->name('category');

        Route::get('details{id}','ProductsController@index')->name('product.details');



    });

    ///////////////////// Routes Guest ///////////////////////////////////////




});


Route::group(['namespace' => 'Site'], function () {



    Route::post('verify_user/','VerificationCodeController@verify')->name('site.verify');
    Route::get('/verify','VerificationCodeController@getVerifyPage')->name('verify');

});





