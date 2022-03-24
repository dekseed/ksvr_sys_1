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

//URL::forceScheme('https');
///// WEBSITE //////


Route::get('/km' , 'PagesContoller@km_ksvr')->name('km_ksvr');
Route::get('/about' , 'PagesContoller@about')->name('about');

Route::resource('/assessment', 'AssessmentController');

Route::get('/preventive_medicine' , 'Preventive_medicineController@index')->name('preventive_medicine.index');
Route::get('/preventive_medicine/personnel' , 'Preventive_medicineController@personnel')->name('preventive_medicine.personnel');
Route::get('/contact' , 'PagesContoller@contact')->name('contact');
Route::get('/officer' , 'PagesContoller@officer')->name('officer');
Route::get('/patient' , 'PagesContoller@patient')->name('patient');
Route::get('/schedule' , 'PagesContoller@schedule')->name('schedule');

Route::get('/', 'PagesContoller@index')->name('welcome');



Route::get('/tender', 'PagesContoller@tender')->name('tender.pages');

Route::get('/opd', 'PagesContoller@opd_index')->name('opd.index');

Route::group(['prefix' => 'report-1'], function () {

    Route::get('/', 'Report1Controller@index')->name('report-1.index');
    Route::post('/search', 'Report1Controller@search')->name('report_search');

    Route::resource('/CheckUp', 'ReportCheckUpController');
    Route::resource('/CheckUp1', 'ReportCheckUp1Controller');
    Route::resource('/CheckUp2', 'ReportCheckUp11Controller');
    Route::resource('/CheckUp3', 'ReportCheckUp12Controller');

});

Route::group(['prefix' => 'medical'], function () {
    Route::get('/', 'PagesContoller@medical_index')->name('medical.index');
    Route::get('/medical-register', 'PagesContoller@medical_register_index')->name('register.index');
    Route::get('/medical-request', 'PagesContoller@medical_request_index')->name('request.index');
    Route::get('/medical-satisfaction', 'PagesContoller@medical_satisfaction_index')->name('satisfaction.index');
    Route::get('/medical-updatemedical', 'PagesContoller@medical_updatemedical_index')->name('updatemedical.index');
});

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

    Route::get('/LAB-eDoc-Folder', 'PagesContoller@lab_download_index')->name('lab_download.index');

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

    Route::get('profile', 'ProfileController@show1')->name('profile.show1');
    Route::put('profile/{id}/update', 'ProfileController@update')->name('profile.update');
    Route::post('profile/upload/{id}', 'ProfileController@uploadimag')->name('profile.upload');

    Route::resource('/timeline-covid', 'TimelineCovidController');
    Route::resource('/timeline-covid-detial', 'TimelineCovidDetailController');
    Route::resource('/temperature-covid', 'TemperatureCovidController');
    Route::get('/wordExport_timeline/{id}', 'TimelineCovidController@wordExport_timeline')->name('wordExport_timeline');
});

Route::group(['prefix' => 'repair', 'middleware' => ['auth', 'role:superadministrator|administrator|user']], function () {

    Route::resource('/repair', 'RepairController');
    Route::get('/repair/seach/{repair}', 'RepairController@seach')->name('repair.seach');
    Route::get('/search-repair', 'SearchController@fetch')->name('search.repair');

    Route::resource('/cartridge-user', 'StockWastesOutcomeModelCartridgeInkController');
    Route::resource('/cartridge_user', 'CartridgeUserController');
});


Route::group(['prefix' => 'web', 'middleware' => ['auth', 'role:superadministrator|administrator|clerical']], function () {

    Route::resource('/publicizes', 'PublicizeController');
    Route::resource('/cate-publicizes', 'CatePublicizeController');
    Route::resource('/job', 'JobController');
    Route::resource('/cat-job', 'CatJobController');
    Route::resource('/users', 'UserController');

});

Route::group(['prefix' => 'web', 'middleware' => ['auth', 'role:superadministrator|administrator|tender']], function () {

    Route::resource('/tender', 'TenderController');
    Route::resource('/cate-tender', 'CateTenderController');


});

Route::group(['prefix' => 'web', 'middleware' => ['auth', 'role:superadministrator|administrator|LAB']], function () {

    Route::resource('/LAB-Upload', 'LabUploadFileController');
    Route::resource('/cate-LAB-Upload', 'CateLabUploadFileController');

});

Route::group(['prefix' => 'users', 'middleware' => ['auth', 'role:superadministrator|administrator|user|operating_room|Community_Health_Center|covid']], function () {


    Route::resource('/borrow', 'BorrowController');

    Route::resource('/report_ques_his_covid', 'Report_Ques_his_covidController');

    });

Route::group(['prefix' => 'check_up', 'middleware' => ['auth', 'role:superadministrator|administrator|operating_room']], function () {

    Route::resource('/cate-check_up', 'CateCheckUpController');
    Route::resource('/kind-check_up', 'KindCheckUpController');
    Route::get('/index', 'CheckUpAdminController@index')->name('check_up.index');


    Route::resource('report/staff', 'Report1_1Controller');
    Route::get( 'report/staff/create/{id}', 'Report1_1Controller@create2')->name('staff.create2');
    Route::resource('report/doctor', 'Report1_2Controller');
    Route::resource('report/dentists', 'Report1_3Controller');

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
    Route::get('/police/show_year/{id}', 'CheckUpAdminPolController@show_year')->name('police.show_year');
    Route::get('/police/{id}/edit', 'CheckUpAdminPolController@edit')->name('police.edit');
    Route::put('/police/{id}', 'CheckUpAdminPolController@update')->name('police.update');
    Route::delete('/police/{id}', 'CheckUpAdminPolController@destroy')->name('police.destroy');


    Route::get('/police/{id}/editpro', 'CheckUpAdminPolController@editpro')->name('police.editpro');
    Route::put('/police-profile/{id}', 'CheckUpAdminPolController@updatepro')->name('police.updatepro');
    Route::delete('/police-profile/{id}', 'CheckUpUserPolController@destroy')->name('user_police.destroy');
    /////// export excel /////////
    Route::get('/police/export', 'CheckUpAdminPolController@exportexcel')->name('police.exportexcel');

});
Route::group(['prefix' => 'check_up-2', 'middleware' => ['auth', 'role:superadministrator|administrator|operating_room']], function () {
    //// V.2 ////
    Route::get('/army', 'ReportCheckUpController@index_admin')->name('check_up.army_2');
    Route::get('/army/create/{id}', 'ReportCheckUpController@create')->name('check_up_army_2.create');
    // Route::post('/army/store_CheckUp', 'ReportCheckUpController@store_CheckUp')->name('check_up_army_2.store');



    Route::get('/army/show/{id}', 'ReportCheckUpController@show')->name('check_up_army_2.show');
});
Route::get('/stock/schedule/{id}', 'PagesContoller@show_user')->name('show_user.stock')->middleware('auth');

Route::group(['prefix' => 'stock', 'middleware' => ['auth', 'role:superadministrator|administrator|schedule-stock']], function () {

    Route::get('/', 'HomeController@dashboard_stock')->name('dashboard_stock');
    Route::resource('/schedule', 'StockController', ['except'=> 'show' ]);
    Route::get('/fetch', 'StockController@fetch_stock')->name('stock.fetch');

    Route::get('/print-qr-code-stock/{id}', 'PDFController@pdf_qr_store')->name('pdf_qr_store');


    Route::resource('/category-equipment', 'CategoryEquipmentController');
    Route::resource('/kinds-equipment', 'StockkindController');
    Route::resource('/brand', 'BrandController');
    Route::post('/number_available/check', 'StockController@check_number')->name('number_available.check');

    Route::resource('/category-waste', 'CategoryWastesController');
    Route::resource('/kinds-waste', 'StockWasteKindController');

    Route::resource('/waste', 'StockWasteController');
    Route::resource('/model-cart-ink', 'ModelCartridgeInkController');

    Route::resource('/stock-wastes-Model-Cartr-Ink', 'StockWastesModelCartridgeInkController');

});



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:superadministrator|administrator']], function () {

    Route::get('/permission-role', 'PermissionController@index')->name('permission_role');

    Route::get('/permission/create', 'PermissionController@create')->name('permission.create');
    Route::post('/permission/{id}/edit', 'PermissionController@edit')->name('permission.edit');
    Route::post('/permission', 'PermissionController@store')->name('permission.store');
    Route::post('/permission/{id}', 'PermissionController@update')->name('permission.update');
    Route::delete('/permission/{id}', 'PermissionController@destroy')->name('permission.destroy');
    Route::resource('/roles', 'RoleController', ['except'=> 'destroy' ]);
    Route::put('/edit_users/password/{id}', 'UserController@edit_users_password')->name('edit_users_password');

    Route::resource('/cartridge', 'CartridgeController');
    Route::resource('/repair-admin', 'RepairAdminController');
    Route::get('/repair-admin/model_cartridge_ink/{id}', 'RepairAdminController@show_model_cartridge_ink')->name('model_cartridge_ink.show');
    Route::get('/repair-admin/model_cartridge_ink/{id}/edit', 'RepairAdminController@edit_model_cartridge_ink')->name('model_cartridge_ink.edit');
    Route::delete('/repair-admin/delete_cartridge_ink/{id}', 'RepairAdminController@destroy_cartridge')->name('destroy_cartridge');
    Route::resource('/borrow-admin', 'BorrowAdminController');

});



// Covid

Route::group(['prefix' => 'users', 'middleware' => ['auth', 'role:superadministrator|administrator|Community_Health_Center']], function () {


    Route::resource('/report_ques_his_covid', 'Report_Ques_his_covidController');
    Route::resource('/Surveillance_Area_Covid', 'SurveillanceAreaCovidController');
    Route::resource('/Province_surveillance_area_covid', 'Province_surveillance_area_covidController');

    });

Route::resource('/Questionnaire-History-Covid-19', 'Ques_his_provice_covidController');
Route::post('/Questionnaire-History-Covid/confirm', 'Ques_his_provice_covidController@confirm')->name('Questionnaire-History-Covid-19.confirm');
Route::get('/Questionnaire-History-Covid/end/{id}', 'Ques_his_provice_covidController@end')->name('Questionnaire-History-Covid-19.end');

Route::get('/Survey-Vaccine-Covid', 'SurveyVaccineCovidController@index')->name('survey_vaccine_covid.index');
Route::post('/Survey-Vaccine-Covid', 'SurveyVaccineCovidController@store')->name('survey_vaccine_covid.store');
Route::get('/Survey-Vaccine-Covid/end', 'SurveyVaccineCovidController@end')->name('survey_vaccine_covid.end');

//แบบสอบสวนผู้ป่วยโรค โควิด-19

// Route::group(['prefix' => 'inquiry-form-Covid'], function () {

    Route::resource('/inquiry-form-Covid', 'Covid19InquiryFormController');
    Route::resource('/clinic', 'ClinicCovid19InquiryController');

    // Route::POST('/inquiry-form-Covid/clinic_show/{id}', 'Covid19InquiryFormController@clinic_show')->name('inquiry-form-Covid.clinic_show');

    // Route::POST('/clinic_edit/{id}/edit', 'Covid19InquiryFormController@clinic_edit')->name('inquiry-form-Covid.clinic_edit');
    Route::get('/inquiry-form-Covid/print/{id}', 'Covid19InquiryFormController@wordExport_covid')->name('inquiry-form-Covid.wordExport_covid');
    // Route::PUT('clinic_update/{id}', 'Covid19InquiryFormController@clinic_update')->name('inquiry-form-Covid.clinic_update');

// });
