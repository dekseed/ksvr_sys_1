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


Route::get('/', function () {
    // return redirect()->route('home');
    return view('pages.webs.welcome');
});

Auth::routes();
// Auth::routes(['register' => false]);

Route::prefix('home')->middleware('auth')
    ->group(function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('profile', 'ProfileController');
    Route::post('/profile/upload/{id}', 'ProfileController@uploadimag')->name('profile.upload');


});
Route::group(['prefix' => 'web', 'middleware' => ['auth', 'role:superadministrator|administrator']], function () {

    Route::resource('/tender', 'TenderController');
    Route::resource('/cate-tender', 'CateTenderController');
    Route::resource('/publicizes', 'PublicizeController');
    Route::resource('/cate-publicizes', 'CatePublicizeController');
    Route::resource('/publicize', 'PublicizeController');
    Route::resource('/cate-publicize', 'CatePublicizeController');

});

Route::group(['prefix' => 'users', 'middleware' => ['auth', 'role:superadministrator|administrator|user']], function () {

    Route::resource('/repair', 'RepairController');
    Route::get('/repair/seach/{repair}', 'RepairController@seach')->name('repair.seach');
    Route::get('/search-repair', 'SearchController@fetch')->name('search.repair');
    Route::resource('/borrow', 'BorrowController');

    });

Route::group(['prefix' => 'stock', 'middleware' => ['auth', 'role:superadministrator|administrator']], function () {

    Route::get('/', 'HomeController@dashboard_stock')->name('dashboard_stock');
    Route::resource('/schedule', 'StockController');
    Route::get('/fetch', 'StockController@fetch_stock')->name('stock.fetch');

    Route::post('/print-qr-code-stock', 'PDFController@pdf_qr_store')->name('pdf_qr_store');


    Route::resource('/category-equipment', 'CategoryEquipmentController');
    Route::resource('/kinds-equipment', 'StockkindController');
    Route::resource('/brand', 'BrandController');
    Route::post('/number_available/check', 'StockController@check_number')->name('number_available.check');
    Route::resource('/waste', 'StockWasteController');
    Route::resource('/category-waste', 'CategoryWastesController');
    Route::resource('/kinds-waste', 'StockWasteKindController');
    Route::resource('/model-cart-ink', 'ModelCartridgeInkController');
});



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:superadministrator|administrator']], function () {

    Route::get('/permission-role', 'PermissionController@index')->name('permission_role');

    Route::get('/permission/create', 'PermissionController@create')->name('permission.create');
    Route::post('/permission/{id}/edit', 'PermissionController@edit')->name('permission.edit');
    Route::post('/permission', 'PermissionController@store')->name('permission.store');
    Route::post('/permission/{id}', 'PermissionController@update')->name('permission.update');
    Route::delete('/permission/{id}', 'PermissionController@destroy')->name('permission.destroy');
    Route::resource('/roles', 'RoleController', ['except'=> 'destroy' ]);
    Route::resource('/users', 'UserController');

    Route::resource('/repair-admin', 'RepairAdminController');
    Route::resource('/borrow-admin', 'BorrowAdminController');
});

