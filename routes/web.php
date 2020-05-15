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

use App\Role;

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();
// Auth::routes(['register' => false]);

Route::prefix('home')->middleware('auth')
    ->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('profile', 'ProfileController');
    Route::post('/profile/upload/{id}', 'ProfileController@uploadimag')->name('profile.upload');


});

Route::group(['prefix' => 'users', 'middleware' => ['role:superadministrator|administrator|user']], function () {

        Route::resource('/repair', 'RepairController');
        Route::post('/repair/seach', 'RepairController@seach')->name('repair.seach');
        Route::get('/search-repair', 'SearchController@fetch')->name('search.repair');
    });

Route::group(['prefix' => 'stock', 'middleware' => ['role:superadministrator|administrator']], function () {

    Route::get('/', 'HomeController@dashboard_stock')->name('dashboard_stock');
    Route::resource('/schedule', 'StockController');
    Route::resource('/category-equipment', 'CategoryEquipmentController');
    Route::resource('/kinds-equipment', 'StockkindController');
    Route::resource('/brand', 'BrandController');
    Route::post('/number_available/check', 'StockController@check_number')->name('number_available.check');
    Route::resource('/waste', 'StockWasteController');
    Route::resource('/category-waste', 'CategoryWastesController');
    Route::resource('/kinds-waste', 'StockWasteKindController');
    Route::resource('/model-cart-ink', 'ModelCartridgeInkController');
    Route::resource('/repair-admin', 'RepairAdminController');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:superadministrator|administrator']], function () {

    Route::get('/permission-role', 'PermissionController@index')->name('permission_role');

    Route::get('/permission/create', 'PermissionController@create')->name('permission.create');
    Route::post('/permission/{id}/edit', 'PermissionController@edit')->name('permission.edit');
    Route::post('/permission', 'PermissionController@store')->name('permission.store');
    Route::post('/permission/{id}', 'PermissionController@update')->name('permission.update');
    Route::delete('/permission/{id}', 'PermissionController@destroy')->name('permission.destroy');
    Route::resource('/roles', 'RoleController', ['except'=> 'destroy' ]);
    Route::resource('/users', 'UserController');

});

// Route::prefix('users')->middleware(['role:administrator|users' => 'auth'])
//     ->group(function () {

// });
Route::get('/signature-pad', function () {
    return view('signature-pad');
});
// Route::prefix('manage')->middleware(['role:superadministrator|administrator' => 'auth'])
//     ->group(function () {

//     Route::get('/profile', ['as' => 'profile.edit', 'uses' => 'ProfileuserController@edit']);
//     Route::put('/profile/{id}', ['as' => 'profile.update', 'uses' => 'ProfileuserController@update']);
//     Route::put('/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileuserController@password']);

// });


