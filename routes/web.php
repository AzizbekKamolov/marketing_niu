<?php
Route::group([
    'prefix' => \LaravelLocalization::setLocale(),
], function () {

    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
    Route::get('university', ['uses' => 'IndexController@university', 'as' => 'university']);
});
Route::get('super', 'SuperController@super')->name('super.super');
//Route::get('super/check/{id}' , 'SuperController@check')->name('super.check');

Route::get('shartnoma', 'ShartnomaController@form')->name('shartnoma.form');
Route::get('lyceum', 'ShartnomaController@lyceum_form')->name('shartnoma.lyceum_form');
Route::post('lyceum-info', 'ShartnomaController@lyceum_info')->name('shartnoma.lyceum_info');
Route::post('lyceum-get', 'ShartnomaController@lyceum_get')->name('shartnoma.lyceum_get');
Route::post('degree-get', 'ShartnomaController@degree_get')->name('shartnoma.get_degree');
Route::post('magistr-get', 'ShartnomaController@magistr_get')->name('shartnoma.magistr_get');
Route::post('super-magistr-get', 'ShartnomaController@super_magister_get')->name('shartnoma.super_magister_get');
Route::post('/super/store', [
    'uses' => 'SuperController@store',
    'as' => 'store'
]);

Route::get('payment-check', 'PaymentCheckController@index')->name('payment_check');
Route::post('payment-check-result', 'PaymentCheckController@check')->name('payment_check_result');

Route::post('/super/checkstore', [
    'uses' => 'SuperController@checkstore',
    'as' => 'checkstore'
]);

Route::get('user/{id}', function ($id) {
    return "asdasdasd";
});

Route::post('/shartnoma/get', [
    'uses' => 'ShartnomaController@get',
    'as' => 'shartnoma.get'
]);
Route::post('/shartnoma/info', [
    'uses' => 'ShartnomaController@info',
    'as' => 'shartnoma.info'
]);
Route::group([
    'prefix' => 'backoffice',
    'namespace' => 'Admin',
    'middleware' => ['web', 'auth']
], function () {

    Route::get('super-mar-type-sum/{type}/{sum}', 'StudentController@super_mar_type_sum')->name('super_mar_type_sum');
    Route::resource('attendance', 'AttendanceController');
    Route::resource('group', 'GroupController');
    Route::post('/group-change', 'GroupController@change')->name('group.change');
    Route::get('attendance-all', 'AttendanceController@attendance_all')->name('attendance.all');
    Route::post('attendance-all', 'AttendanceController@attendance_between_date')->name('attendance.all');
    Route::get('old-attendance/{old_date}', 'AttendanceController@select_date_index')->name('select_date_index');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('masters', 'MastersController');
    Route::resource('overseas', 'OverseasController');
    Route::resource('menu', 'MenuController');
    Route::get('/settings/profile', [
        'uses' => 'SettingsController@profile',
        'as' => 'settings'
    ]);
    Route::get('/export/index', [
        'uses' => 'ExportController@index',
        'as' => 'export.index'
    ]);

    //jamshid
    Route::resource('student', 'StudentController');
    Route::get('student-magistr', 'StudentController@student_magistr')->name('student_magistr');
    Route::post('student-magistr', 'StudentController@student_magistr_store')->name('student_magistr');
    Route::get('student-magistr-create', 'StudentController@student_magistr_create')->name('student_magistr_create');
    Route::get('attendance-statistic/by-faculty', 'AttendanceController@statistic_by_faculty')->name('statistic_by_faculty');
    Route::get('attendance-statistic/six-day', 'AttendanceController@statistic_six_day')->name('statistic_six_day');
    Route::post('attendance-statistic/by-faculty', 'AttendanceController@statistic_by_date')->name('statistic_by_date');
    Route::get('attendance-statistic/by-group/{id}', 'AttendanceController@statistic_by_group')->name('statistic_by_group');
    Route::put('attendance-statistic/by-group/{id}', 'AttendanceController@statistic_by_group_date')->name('statistic_by_group_date');
    Route::get('statistic', 'StudentController@stat')->name('stat.index');
    Route::get('super-id-getteds', 'StudentController@index_super_id_berilgan')->name('index_super_id_berilgan');
    Route::get('/search-student/{text}', 'StudentController@search_student')->name('search_student');
    Route::get('/get-area-by-region/{id}', 'AreaController@get_area_by_region')->name('get_area_by_region');
    Route::get('/super-for-marketing', 'StudentController@super_for_marketing')->name('super_for_marketing');
    Route::get('/super-give-id-code-magister/{type}', 'StudentController@super_give_id_code_magister')->name('super_give_id_code_magister');
    Route::get('/super-for-marketing-magister', 'StudentController@super_for_marketing_magister')->name('super_for_marketing_magister');
    Route::get('/super-for-marketing-magister-by-amount/{type}', 'StudentController@super_for_marketing_magister_by_amount')->name('super_for_marketing_magister_by_amount');
    Route::get('/super-give-id-code', 'StudentController@super_give_id_code')->name('super_give_id_code');
    Route::post('/store-id-code', 'StudentController@store_id_code')->name('store_id_code');
    Route::get('/rozilik-student/{id}', 'StudentController@rozilik_student')->name('rozilik_student');

// SUPER
    Route::resource('super', 'SuperController');
    Route::get('/super-amount-type/{type}', 'SuperController@amount_type')->name('amount_type');
    Route::get('/super-magistr-amount-type/{type}', 'SuperController@amount_magistr_type')->name('amount_magistr_type');
    Route::get('/super-amount-type-marketing/{type}', 'StudentController@amount_type_marketing')->name('amount_type_marketing');
    Route::get('/super-give-id-by-type/{type}', 'StudentController@give_id_by_type')->name('give_id_by_type');
    Route::get('/super-dir-lang-type/{dir}/{lang}', 'SuperController@dir_lang_type')->name('dir_lang_type');

    Route::get('/magister-dir-lang-super/{dir}/{lang}', 'SuperController@magister_dir_lang_super')->name('magister_dir_lang_super');

    Route::get('/super-magister', 'SuperController@magistr_index')->name('super.magister');
    Route::post('/checking-super', 'SuperController@tasdiqlash')->name('tasdiqlash');
    Route::get('/reject-super/{id}', 'SuperController@bekor_qilish')->name('reject');
    Route::get('/ariza-for-super/{id}', 'SuperController@pdf_for_super')->name('pdf_for_super');

    Route::get('check-user-session', 'AttendanceController@check_user_session')->name('check_user_session');

    //payment_admin
    Route::get('/payment-admin-students', 'PaymentAdminController@index')->name('payment_admin.student.index');
    Route::get('/payment-admin-students-create', 'PaymentAdminController@create_student')->name('payment_admin.student.create');
    Route::post('/payment-admin-students-store', 'PaymentAdminController@store_student')->name('payment_admin.student.store');
    Route::put('/payment-admin-students-update/{id}', 'PaymentAdminController@update')->name('payment_admin.student.update');
    Route::get('/payment-admin-student-payments/{id}', 'PaymentAdminController@student_payments')->name('payment_admin.student.payments');
    Route::get('/payment-admin-students-check-edit/{id}', 'PaymentAdminController@student_check_edit')->name('payment_admin.student.check.edit');
    Route::get('/payment-admin-students-show/{id}', 'PaymentAdminController@student_show')->name('payment_admin.student.show');

    Route::get('/payment-admin-student-no-checkeds', 'PaymentAdminController@no_checkeds')->name('payment_admin.student.no_checkeds');
    Route::post('/payment-admin-student-payment-store', 'PaymentAdminController@payment_store')->name('payment_admin.student.payment.store');
    Route::delete('/payment-admin-student-payment-delete/{id}', 'PaymentAdminController@payment_delete')->name('payment_admin.student.payment.delete');
    Route::get('/get-type-by-degree/{id}', 'PaymentAdminController@get_type_by_degree')->name('payment_admin.get.type.by.degree');
    Route::get('/months', 'MonthController@index')->name('month.index');
    Route::get('/scholarships/{month_id}', 'ScholarshipController@index')->name('scholarship.index');
    Route::get('/scholarships-by-student/{id_code}', 'ScholarshipController@scholarship_by_student')->name('scholarship.scholarship_by_student');
    Route::post('/scholarships-import', 'ScholarshipController@import')->name('scholarship.import');

//    payment admin new
    Route::get('/payment-admin/student-types', 'PaymentAdminController@student_types')->name('payment_admin.student_types');
    Route::get('/payment-admin/student-types/{id}', 'PaymentAdminController@student_types_show')->name('payment_admin.student_types_show');
//    Route::get('/payment-admin/student-types/{id}', 'PaymentAdminController@student_types_show')->name('payment_admin.student_types_show');

    Route::delete('/payment-admin/student-type-agreement-type', 'StudentTypeAgreementTypeController@destroy')->name('payment_admin.student_type.agreement_type.destroy');
    Route::post('/payment-admin/student-type-agreement-type', 'StudentTypeAgreementTypeController@store')->name('payment_admin.student_type.agreement_type.store');
    Route::delete('/payment-admin/student-type-agreement-side-type', 'StudentTypeAgreementSideTypeController@destroy')->name('payment_admin.student_type.agreement_side_type.destroy');
    Route::post('/payment-admin/student-type-agreement-side-type', 'StudentTypeAgreementSideTypeController@store')->name('payment_admin.student_type.agreement_side_type.store');
    Route::post('/payment-admin/student-type-other-agreement-type', 'StudentTypeOtherAgreementTypeController@store')->name('payment_admin.student_type.other_agreement_type.store');
    Route::delete('/payment-admin/student-type-other-agreement-type', 'StudentTypeOtherAgreementTypeController@destroy')->name('payment_admin.student_type.other_agreement_type.destroy');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clear', function () {
    return Artisan::call('config:cache');
});



//new routes
Route::post('/student/get-data' , 'AgreementController@get_data')->name('student.agreement.get_data');
Route::post('/student/show-agreement' , 'AgreementController@show_agreement')->name('student.agreement.show_agreement');
Route::post('/student/show-other-agreement' , 'AgreementController@show_other_agreement')->name('student.other_agreement.show_agreement');
Route::get('/student/form' , 'AgreementController@form')->name('student.agreement.form');