<?php

use Test\Model\StudentPayment;
use Test\Model\SmsRas;
use Test\Model\SmsSend;

Route::group([
    'prefix' => \LaravelLocalization::setLocale(),
], function () {

    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
    Route::get('university', ['uses' => 'IndexController@university', 'as' => 'university']);
});
Route::get('super', 'SuperController@super')->name('super.super');
Route::get('super-perevod', 'SuperController@super_perevod')->name('super.super_perevod');
Route::get('/contract-cards', 'SuperController@contract_cards')->name('student.contract_cards');
Route::get('/contract-cards-tabaqa', 'SuperController@contract_cards_tabaqa')->name('student.contract_cards_tabaqa');
Route::get('/super-cards', 'SuperController@super_cards')->name('student.super_cards');
//Route::get('super', function(){
//    return "Ariza topshirish boshlanmadi";
//})->name('super.super');
//Route::get('super-test', 'SuperController@super')->name('super.test');
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

    Route::get('super-mar-type-sum/{type}', 'StudentController@super_mar_type_sum')->name('super_mar_type_sum');
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
    Route::post('/import-students', 'StudentController@importStudents')->name('import.students');
    Route::post('/import-students-save', 'StudentController@importStudentsSave')->name('import.students.save');

// SUPER
    Route::resource('super', 'SuperController');
    Route::get('/super-index-accepteds', 'SuperController@super_index_accepteds')->name('super.index.accepteds');
    Route::get('/super-amount-type/{type}', 'SuperController@amount_type')->name('amount_type');
    Route::get('/super-magistr-amount-type/{type}', 'SuperController@amount_magistr_type')->name('amount_magistr_type');
    Route::get('/super-amount-type-marketing/{type}', 'StudentController@amount_type_marketing')->name('amount_type_marketing');
    Route::get('/super-give-id-by-type/{type}', 'StudentController@give_id_by_type')->name('give_id_by_type');
    Route::get('/super-dir-lang-type/{dir}/{lang}', 'SuperController@dir_lang_type')->name('dir_lang_type');
    Route::get('/student-import-example', function () {
        return response()->download(public_path('files/students-import-example.xlsx'));
    })->name('student.import.example');

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
    Route::get('/payment-admin-students-delete/{id}', 'PaymentAdminController@student_delete')->name('payment_admin.student.delete');
    Route::get('/payment-admin-students-change-status/{id}', 'PaymentAdminController@change_status')->name('payment_admin.student.change_status');

    Route::get('/payment-admin-credits', 'CreditController@index')->name('payment_admin.credits.index');
    Route::post('/payment-admin-credits-update', 'CreditController@update')->name('payment_admin.credits.update');
    Route::post('/payment-admin-credits-import', 'CreditController@import')->name('payment_admin.credits.import');
    Route::post('/payment-admin-import-closed-credits', 'CreditController@closedCredits')->name('payment_admin.import.closed.credits');
    Route::post('/payment-admin-credits-import-save', 'CreditController@import_save')->name('payment_admin.credits.import_save');

    Route::get('/payment-admin-student-no-checkeds', 'PaymentAdminController@no_checkeds')->name('payment_admin.student.no_checkeds');
    Route::post('/payment-admin-student-payment-store', 'PaymentAdminController@payment_store')->name('payment_admin.student.payment.store');
    Route::delete('/payment-admin-student-payment-delete/{id}', 'PaymentAdminController@payment_delete')->name('payment_admin.student.payment.delete');
    Route::get('/get-type-by-degree/{id}', 'PaymentAdminController@get_type_by_degree')->name('payment_admin.get.type.by.degree');
    Route::get('/months', 'MonthController@index')->name('month.index');
    Route::get('/scholarships/{month_id}', 'ScholarshipController@index')->name('scholarship.index');
    Route::get('/scholarships-by-student/{id_code}', 'ScholarshipController@scholarship_by_student')->name('scholarship.scholarship_by_student');
    Route::post('/scholarships-import', 'ScholarshipController@import')->name('scholarship.import');
    Route::post('/payments-import', 'PaymentImportController@import')->name('payments.import');
    Route::post('/payments-import-save', 'PaymentImportController@import_save')->name('payments.import_save');

//    payment admin new
    Route::get('/payment-admin/student-types', 'PaymentAdminController@student_types')->name('payment_admin.student_types');
    Route::get('/payment-admin/student-types/{id}', 'PaymentAdminController@student_types_show')->name('payment_admin.student_types_show');
//    Route::get('/payment-admin/student-types/{id}', 'PaymentAdminController@student_types_show')->name('payment_admin.student_types_show');

    Route::resource('credit_prices', 'CreditPriceController');

    Route::delete('/payment-admin/student-type-agreement-type', 'StudentTypeAgreementTypeController@destroy')->name('payment_admin.student_type.agreement_type.destroy');
    Route::post('/payment-admin/student-type-agreement-type', 'StudentTypeAgreementTypeController@store')->name('payment_admin.student_type.agreement_type.store');
    Route::delete('/payment-admin/student-type-agreement-side-type', 'StudentTypeAgreementSideTypeController@destroy')->name('payment_admin.student_type.agreement_side_type.destroy');
    Route::post('/payment-admin/student-type-agreement-side-type', 'StudentTypeAgreementSideTypeController@store')->name('payment_admin.student_type.agreement_side_type.store');
    Route::post('/payment-admin/student-type-other-agreement-type', 'StudentTypeOtherAgreementTypeController@store')->name('payment_admin.student_type.other_agreement_type.store');
    Route::delete('/payment-admin/student-type-other-agreement-type', 'StudentTypeOtherAgreementTypeController@destroy')->name('payment_admin.student_type.other_agreement_type.destroy');
    Route::delete('/payment-admin/discount', 'DiscountController@destroy')->name('payment_admin.discount.destroy');
    Route::post('/payment-admin/discount', 'DiscountController@store')->name('payment_admin.discount.store');
    Route::post('/payment-admin/send-id-code', 'PaymentAdminController@send_id_code')->name('payment_admin.send_id_code');

    Route::post('/payment-admin/other-agreement-access-store', 'StudentOtherAgreementAccessController@store')->name('payment_admin.other_agreement_access_store');
    Route::post('/payment-admin/change-agreement-types', 'PaymentAdminController@change_agreement_types')->name('payment_admin.change_agreement_types');


    Route::get('/ttj-admin/ttj-admin-students', 'PaymentAdminController@index')->name('ttj_admin.students');
    Route::get('/ttj-admin/ttj-admin-students/{type}', 'PaymentAdminController@ttj_students')->name('ttj_admin.students.type');


    Route::get('/lyceum-admin/super/index', 'LyceumSuperController@super_index')->name('super.lyceum.index');
    Route::get('/lyceum-admin/super/index-parent-data/{status}', 'LyceumSuperController@super_index_parent_data')->name('super.lyceum.index.parent.data');
    Route::get('/lyceum-admin/super/index-status/{status}', 'LyceumSuperController@super_index_by_status')->name('super.lyceum.index.by_status');
    Route::get('/lyceum-admin/super/index-amount/{amount}', 'LyceumSuperController@super_index_by_amount')->name('super.lyceum.index.by_amount');
    Route::get('/lyceum-admin/super/show/{id}', 'LyceumSuperController@super_show')->name('super.lyceum.show');
    Route::get('/lyceum-admin/super/edit/{id}', 'LyceumSuperController@super_edit')->name('super.lyceum.edit');
    Route::get('/lyceum-admin/super/edit-parent-data/{id}', 'LyceumSuperController@edit_parent_data')->name('super.lyceum.edit_parent_data');
    Route::put('/lyceum-admin/super/update-parent-data/{id}', 'LyceumSuperController@update_parent_data')->name('super.lyceum.update.parent.data');
    Route::post('/lyceum-admin/super/accept', 'LyceumSuperController@lyceum_accept')->name('lyceum.accept');
    Route::get('/lyceum-admin/super/reject/{id}', 'LyceumSuperController@reject_super_lyceum')->name('reject.super.lyceum');

    Route::get('/lyceum-admin/students/index', 'LyceumSuperController@students_index')->name('students.lyceum.index');
    Route::get('/lyceum-admin/students/show/{id}', 'LyceumSuperController@students_show')->name('students.lyceum.show');

    Route::get('/lyceum-admin/students/export-all', 'LyceumSuperController@export_all')->name('students.lyceum.export_all');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/backoffice');
})->name('home');


//new routes
Route::post('/student/get-data', 'AgreementController@get_data')->name('student.agreement.get_data');
Route::post('/student/show-agreement', 'AgreementController@show_agreement')->name('student.agreement.show_agreement');
Route::post('/student/pdf-agreement', 'AgreementController@pdf_agreement')->name('student.agreement.pdf_agreement');
Route::post('/student/show-other-agreement', 'AgreementController@show_other_agreement')->name('student.other_agreement.show_agreement');
Route::post('/student/pdf-other-agreement', 'AgreementController@pdf_other_agreement')->name('student.other_agreement.pdf_agreement');
Route::get('/student/form', 'AgreementController@form')->name('student.agreement.form');
Route::get('/student/form-first-course', 'AgreementController@form_first_course')->name('student.agreement.form_first_course');
Route::get('/student/form-first-classified-course', 'AgreementController@form_first_classified_courses')->name('student.agreement.form_first_classified_course');
Route::get('/student/form-first-classified-course-sirtqi', 'AgreementController@form_first_classified_courses_sirtqi')->name('student.agreement.form_first_classified_course_sirtqi');
Route::get('/student/form-first-classified-course-masofaviy', 'AgreementController@form_first_classified_courses_masofaviy')->name('student.agreement.form_first_classified_course_masofaviy');
Route::get('/student/form-first-classified-course-transfer-study', 'AgreementController@form_first_classified_courses_transfer_study')->name('student.agreement.form_first_classified_courses_transfer_study');
Route::get('/student/form-first-classified-course-magistr', 'AgreementController@form_first_classified_courses_magistr')->name('student.agreement.form_first_classified_courses_magistr');
Route::get('/student/form-classified-perevod', 'AgreementController@form_classified_perevod')->name('student.agreement.form_classified_perevod');
Route::get('/student/form-classified-perevod-sirtqi', 'AgreementController@form_classified_perevod_sirtqi')->name('student.agreement.form_classified_perevod_sirtqi');
Route::get('/student/form-super-magister', 'AgreementController@form_super_magister')->name('student.agreement.form_super_magister');
Route::get('/student/lyceum/form', 'AgreementController@lyceum_form')->name('student.agreement.lyceum_form');
Route::post('/student/lyceum/show-agreement', 'AgreementController@lyceum_show_agreement')->name('student.agreement.lyceum_show_agreement');
Route::post('/student/lyceum/pdf-agreement', 'AgreementController@lyceum_pdf_agreement')->name('student.agreement.lyceum_pdf_agreement');


//card routes


Route::get('payment-check', 'PaymentCheckController@index')->name('payment_check');
Route::post('payment-check-result', 'PaymentCheckController@check')->name('payment_check_result');
Route::get('student-credits', 'StudentCreditController@form')->name('student.credits');
Route::post('student-credits-check', 'StudentCreditController@check')->name('student.credits.check');
Route::post('student-credits-agreement', 'StudentCreditController@agreement')->name('student.credits.agreement');
Route::post('student-credits-agreement-pdf', 'StudentCreditController@agreement_pdf')->name('student.credits.agreement_pdf');

Route::get('/student/form-ttj', 'AgreementController@form_ttj')->name('student.agreement.form_ttj');
Route::post('/student/show-agreement-ttj', 'AgreementController@show_agreement_ttj')->name('student.agreement.show_agreement_ttj');


Route::get('/lyceum/super/form', 'SuperLyceumController@form')->name('lyceum.super.form');
Route::get('/lyceum/super/form-self', 'SuperLyceumController@form_self')->name('lyceum.super.form_self');
Route::post('/lyceum/super/get-data', 'SuperLyceumController@get_data')->name('lyceum.super.get_data');
Route::post('/lyceum/super/store-application', 'SuperLyceumController@store_application')->name('lyceum.super.store_application');

Route::group(['prefix' => 'jointraining'], function () {
    Route::get('/student/form', 'JoinTrainingController@form')->name('student.agreement.join_training.form');
    Route::post('/student/get-data', 'JoinTrainingController@get_data')->name('student.agreement.join_training.get_data');
    Route::post('/student/show-agreement', 'JoinTrainingController@show_agreement')->name('student.agreement.join_training.show_agreement');
    Route::post('/student/pdf-agreement', 'JoinTrainingController@pdf_agreement')->name('student.agreement.join_training.pdf_agreement');
});


Route::get('/sms-ras', function () {
    $rass1 = SmsRas::where('status', 0)->get()->toArray();

    $smsSend = new SmsSend();
    $chunked = array_chunk($rass1, 100);
//    return $rass1;
    foreach ($chunked as $itemChunk) {
        $rass = $itemChunk;
        $body = [];
        $index = 0;
        foreach ($rass as $item) {
            $body['messages'][$index]['recipient'] = $item['number'];
            $body['messages'][$index]['message-id'] = $item['id'] . uniqid();
            $body['messages'][$index]['sms']['originator'] = '3700';
            $body['messages'][$index]['sms']['content']['text'] = $item['name'];
            $index++;
        }
        if (count($rass)) {
            $result = $smsSend->send_many_sms(json_encode($body));
            foreach ($rass as $item) {
                $itemGet = SmsRas::find($item['id']);
                $itemGet->response = json_encode($result);
                $itemGet->status = 1;
                $itemGet->update();
            }
        }
        sleep(1);
    }
    return 'Success';
});
//Route::get('/schot', function () {
//    $r = 'Test\Model\Rrr'::where('status', 4)->get();
//    foreach ($r as $item) {
//        $newSuper = new \Test\Model\Result();
//        $newSuper->passport_serial = $item->pass_seria;
//        $newSuper->passport_number = $item->pass_number;
//        $newSuper->passport_jshshir = $item->jshir;
//        $newSuper->last_name = $item->lastname;
//        $newSuper->first_name = $item->firstname;
//        $newSuper->middle_name = $item->middlename;
//        $newSuper->dtm_id = $item->dtm_id;
//        $newSuper->lang = $item->lang1;
//        $newSuper->dir_array = $item->dir;
//        $newSuper->edu_types = $item->edu_types;
//        $newSuper->type = 1;
//        $newSuper->ball = $item->ball;
//        $newSuper->birthday = $item->birthday;
//        $newSuper->gender = $item->gender;
//        $newSuper->comment = 'simple_bakalavr';
//        $newSuper->description = 'Oddiy bakalavr (Boshqa OTM ga kirgan)';
//        $newSuper->save();
////        $newArray = [];
////        if ($item->dir1)array_push($newArray,$item->dir1);
////        if ($item->dir2)array_push($newArray,$item->dir2);
////        if ($item->dir3)array_push($newArray,$item->dir3);
////        if ($item->dir4)array_push($newArray,$item->dir4);
////        if ($item->dir5)array_push($newArray,$item->dir5);
////        $item->dir = json_encode($newArray);
////        $result = \Test\Model\Result::where('passport_jshshir' , $item->jshir)->first();
////        if ($result){
////            $result->edu_types = $item->edu_types;
////            $result->update();
////        }
//        $item->status = 5;
//        $item->update();
//    }
//
//});
