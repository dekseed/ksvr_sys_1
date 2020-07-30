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
})->name('welcome');

Route::get('/opd', 'PagesContoller@opd_index')->name('opd.index');
Route::get('/alternative-medicine', 'PagesContoller@alternative_medicine_index')->name('alternative_medicine.index');
Route::get('/physical-therapy', 'PagesContoller@physical_therapy_index')->name('physical_therapy.index');
Route::get('/hemodialysis-unit', 'PagesContoller@hemodialysis_unit_index')->name('hemodialysis_unit.index');
Route::get('/nutrition', 'PagesContoller@nutrition_index')->name('nutrition.index');

Route::get('/lab', 'PagesContoller@lab_index')->name('lab.index');

// Route::get('/check_up-user', function () {
   
//     return view('pages.check_up.user.index');
// });

Route::resource('check_up-user_pol', 'CheckUpUserPolController');

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

Route::group(['prefix' => 'check_up', 'middleware' => ['auth', 'role:superadministrator|administrator']], function () {

    Route::resource('/cate-check_up', 'CateCheckUpController');
    Route::resource('/kind-check_up', 'KindCheckUpController');
    Route::get('/index', 'CheckUpAdminController@index')->name('check_up.index');
    // Route::resource('check_up', 'CheckUpAdminController');
    Route::get('/police', 'CheckUpAdminPolController@index')->name('check_up.police');
    Route::get('/police/{id}/add', 'CheckUpAdminPolController@add')->name('police.add');
    Route::post('/police/store', 'CheckUpAdminPolController@store')->name('police.store');
    Route::get('/police/{id}', 'CheckUpAdminPolController@show')->name('police.show');
    Route::get('/police/{id}/edit', 'CheckUpAdminPolController@edit')->name('police.edit');
    Route::get('/police/{id}/editpro', 'CheckUpAdminPolController@editpro')->name('police.editpro');
    Route::delete('/police/{id}', 'CheckUpAdminPolController@destroy')->name('police.destroy');
    Route::put('/police-profile-update/{id}', 'CheckUpAdminPolController@updatepro')->name('police.updatepro');
    Route::put('/police/{id}', 'CheckUpAdminPolController@update')->name('police.update');
    Route::delete('/police-profile-delete/{id}', 'CheckUpUserPolController@destroy')->name('user_police.destroy');
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

