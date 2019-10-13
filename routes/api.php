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
//
//Route::get('country','CountryController@country');
//Route::get('country/{id}','CountryController@countryById');
//Route::post('country','CountryController@countrySave');
//Route::put('country/{id}','CountryController@countryUpdate');
//Route::delete('country/{id}','CountryController@countryDelete');
/*
Route::group(['middleware'=>'auth:api'],function (){
    Route::apiResource('country','CountryController');
});*/
Route::apiResource('country','CountryController');

Route::get('file/country_list', 'FileController@countryList');

Route::post('file/country_list', 'FileController@countrySave');
