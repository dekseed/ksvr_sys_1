<?php

use Xmhafiz\FbFeed\FbFeed;
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
//URL::forceScheme('https');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/categories_eqm', 'Api\Categories_eqmController@categories_eqm');
Route::get('/kinds/{category_equipment}', 'Api\Categories_eqmController@kinds');

Route::get('/categories_waste', 'Api\Categories_eqmController@categories_waste');
Route::get('/wastes/{category_wastes}', 'Api\Categories_eqmController@wastes');

Route::get('/army', 'Api\CheckUpAdminArmyController@filter');

Route::post('/login', 'Api\UserController@login');
Route::post('/register', 'Api\UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'Api\UserController@details');
});

//Route::get('/search-stock', 'Api\SearchController@fetch');


Route::get('/province','Api\DistrictController@provinces');
Route::get('/province/{province_code}/amphoe','Api\DistrictController@amphoes');
Route::get('/province/{province_code}/amphoe/{amphoe_code}/district','Api\DistrictController@districts');
Route::get('/province/{province_code}/amphoe/{amphoe_code}/district/{district_code}','Api\DistrictController@detail');

Route::get('/profile_covid','Api\CovidController@index')->name('profile_covid');

Route::get('/facebook-feed', function () {

$config = [
    'secret_key' => 'b14662ab259eb4dc54efd2cfacd1698c',
    'app_id' => '189274632563556',
    'page_name' => 'ksvrhospital',
    'access_token' => 'EAACsJO89K2QBAFJFCr6PkPlCeFQCgtzqPfEM1mZB9HZBiCRfY9ZCPvJXEZAKt8OV8lbPZBczrxYANC8Li6Nr0mk6j7RGsDPkVvnaZAMWjfz6zAvZAhBIbchzFRYdT8NoyevXZC75oweNK4VCoA71pUfaBS51zqreEjYLKqGHbunjXwZDZD',
];
// $data = fb_feed($config)->fetch();
    $data = FbFeed::make($config)
            ->feedLimit(12)
            ->fetch();

    return response()->json($data);

})->name('facebook_feed');
