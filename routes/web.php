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

Route::get('AdminLogin',['as'=>'login','uses'=>'BanhangController@Get_login']);
Route::post('AdminLogin',['as'=>'p-login','uses'=>'BanhangController@Post_login']);

Route::group( [ 'prefix' => 'admin' ,  'middleware' => ['CheckAdmin']], function(){
    Route::get('logout',['as'=>'logout','uses'=>'BanhangController@logout']);

    Route::group(['prefix' => 'product'], function () {

        Route::get('ProductList',['as'=>'pro-list','uses'=>'BanhangController@Get_ProductList']);

        Route::get('Insert-product',['as'=>'g-insert','uses'=>'BanhangController@Get_insert_pro']);
        Route::post('Insert-product',['as'=>'p-insert','uses'=>'BanhangController@Post_insert_pro']);

        Route::get('Update-product/{id}',['as'=>'g-update','uses'=>'BanhangController@Get_Update']);
        Route::post('Update-product/{id}',['as'=>'p-update','uses'=>'BanhangController@Post_Update']);

        Route::get('insert-product-type',['as'=>'g-type','uses'=>'BanhangController@Get_insert_type']);
        Route::post('insert-product-type',['as'=>'p-type','uses'=>'BanhangController@Post_insert_type']);

        Route::post('remove-pro',['as'=>'remove-pro','uses'=>'BanhangController@Remove_Pro']);
    });
});

Route::get('/',['as'=>'/','uses'=>'BanhangController@Get_Index']);