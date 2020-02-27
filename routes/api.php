<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product/classList','Api\IndexController@getCateDetailName');
Route::get('/product/list/{page_index?}/{data_num?}/{product_cate?}','Api\ProductController@getList')->where(['page_index' => '[0-9]+','data_num'=>'[0-9]+','product_cate'=>'[0-9]+']);
