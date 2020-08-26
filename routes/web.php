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
//URL::forceScheme('https');
///// WEBSITE //////
Route::get('/', 'PagesContoller@index')->name('welcome');
// Route::get('/', function () {
//     return view('pages.webs.welcome');
// })->name('welcome');
Route::get('/contact', function () {
    return view('pages.webs.contact');
})->name('contact');
Route::get('/officer', function () {
    return view('pages.webs.officer');
})->name('officer');
Route::get('/patient', function () {
    return view('pages.webs.patient');
})->name('patient');

Route::get('/opd', 'PagesContoller@opd_index')->name('opd.index');

Route::group(['prefix' => 'alternative-medicine'], function () {
    Route::get('/', 'PagesContoller@alternative_medicine_index')->name('alternative_medicine.index');
    Route::get('/physical-therapy', 'PagesContoller@physical_therapy_index')->name('physical_therapy.index');
    Route::get('/thai-traditional-medicine', 'PagesContoller@thai_traditional_medicine_index')->name('thai_traditional_medicine.index');
    Route::get('/needle-ide-index', 'PagesContoller@needle_ide_index')->name('needle_ide_index.index');
    Route::get('/spa', 'PagesContoller@spa_index')->name('spa.index');
});
Route::group(['prefix' => 'nutrition'], function () {
    Route::get('/', 'PagesContoller@nutrition_index')->name('nutrition.index');
    Route::get('/list', 'PagesContoller@nutrition_list_index')->name('nutrition_list.index');
    Route::get('/list/food-general/detail-food', 'PagesContoller@nutrition_detail_food_index')->name('detail_food.index');
    Route::get('/list/food-general', 'PagesContoller@nutrition_list_general_index')->name('nutrition_list_general.index');
});
Route::group(['prefix' => 'lab'], function () {
    Route::get('/', 'PagesContoller@lab_index')->name('lab.index');
    Route::get('/download', 'PagesContoller@lab_download_index')->name('lab_download.index');
   
});


Route::get('/hemodialysis-unit', 'PagesContoller@hemodialysis_unit_index')->name('hemodialysis_unit.index');
Route::get('/er', 'PagesContoller@er_index')->name('er.index');

Route::get('/dental', 'PagesContoller@dental_index')->name('dental.index');
Route::get('/health-center', 'PagesContoller@health_center_index')->name('health_center.index');


///// END WEBSITE //////


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
    Route::resource('/job', 'JobController');
    Route::resource('/cat-job', 'CatJobController');

});

Route::group(['prefix' => 'users', 'middleware' => ['auth', 'role:superadministrator|administrator|user|operating_room']], function () {

    Route::resource('/repair', 'RepairController');
    Route::get('/repair/seach/{repair}', 'RepairController@seach')->name('repair.seach');
    Route::get('/search-repair', 'SearchController@fetch')->name('search.repair');
    Route::resource('/borrow', 'BorrowController');

    });

Route::group(['prefix' => 'check_up', 'middleware' => ['auth', 'role:superadministrator|administrator|operating_room']], function () {

    Route::resource('/cate-check_up', 'CateCheckUpController');
    Route::resource('/kind-check_up', 'KindCheckUpController');
    Route::get('/index', 'CheckUpAdminController@index')->name('check_up.index');
    
 
    //////////// army //////////////////
    Route::get('/army', 'CheckUpAdminArmyController@index')->name('check_up.army');
    Route::get('/army/create/{id}/{year}', 'CheckUpAdminArmyController@create')->name('army.create');
    Route::get('/army/search','CheckUpAdminArmyController@search')->name('army.search');
    Route::post('/army/store', 'CheckUpAdminArmyController@store')->name('army.store');
    Route::get('/army/show/{id}', 'CheckUpAdminArmyController@show')->name('army.show');
    Route::get('/army/show_year/{id}', 'CheckUpAdminArmyController@show_year')->name('army.show_year');
    Route::get('/army/{id}/edit', 'CheckUpAdminArmyController@edit')->name('army.edit');
    Route::get('/army/{id}/edit_year', 'CheckUpAdminArmyController@edit_year')->name('army.edit_year');
    Route::put('/army/update_year/{id}', 'CheckUpAdminArmyController@update_year')->name('army.update_year');
    Route::put('/army/{id}', 'CheckUpAdminArmyController@update')->name('army.update');
    Route::delete('/army/delete_year/{id}', 'CheckUpAdminArmyController@destroy_year')->name('army.destroy_year');
    Route::delete('/army/delete/{id}', 'CheckUpAdminArmyController@destroy')->name('army.destroy');

    //////////// police //////////////////////////
    Route::get('/police', 'CheckUpAdminPolController@index')->name('check_up.police');

    Route::get('/police/create', 'CheckUpAdminPolController@create')->name('police.create');
    Route::post('/police/store', 'CheckUpAdminPolController@store')->name('police.store');
    Route::get('/police/{id}/add', 'CheckUpAdminPolController@add')->name('police.add');
    Route::put('/police/create_checkup/{id}', 'CheckUpAdminPolController@create_checkup')->name('police.create_checkup');

    Route::get('/police/show/{id}', 'CheckUpAdminPolController@show')->name('police.show');
    Route::get('/police/{id}/edit', 'CheckUpAdminPolController@edit')->name('police.edit');
    Route::put('/police/{id}', 'CheckUpAdminPolController@update')->name('police.update');
    Route::delete('/police/{id}', 'CheckUpAdminPolController@destroy')->name('police.destroy');


    Route::get('/police/{id}/editpro', 'CheckUpAdminPolController@editpro')->name('police.editpro');
    Route::put('/police-profile/{id}', 'CheckUpAdminPolController@updatepro')->name('police.updatepro');
    Route::delete('/police-profile/{id}', 'CheckUpUserPolController@destroy')->name('user_police.destroy');
    /////// export excel /////////
    Route::get('/police/export', 'CheckUpAdminPolController@exportexcel')->name('police.exportexcel');
    
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

