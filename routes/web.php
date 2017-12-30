<?php

Auth::routes();

/*---------------------------- Frontend Route --------------------------*/

Route::get('/', 'FrontendController@index'); //Homepage

Route::get('course', 'FrontendController@course');
Route::get('/course_details/{course_id}', 'FrontendController@course_details')->where('course_id', '[0-9]+')->name('course_elaboration');
Route::get('/registration/{registration_id}', 'FrontendController@registration');
Route::post('/register_entry/{course_id}', 'FrontendController@register_entry');
Route::get('/checkout/{registration_id}', 'FrontendController@checkout');

Route::get('/payment', 'FrontendController@payment_confirmation'); //Load Payment Confirmation Page
Route::post('/confirm_payment', 'FrontendController@submit_payment_confirmation'); //Insert the Payment Confirmation Information to Database
Route::get('/thank_you', 'FrontendController@redirect_payment_confirmation'); //Redirect to this page
/* Additional Pages */
Route::get('/about_us', 'FrontendController@about_us');
Route::get('/news', 'FrontendController@news_list');
Route::get('/news_details/{news_id}', 'FrontendController@news_details');
/*Service Page */
Route::get('/it_consulting_service', 'FrontendController@it_consulting_service');
Route::get('/mobile_application_development_service', 'FrontendController@mobile_application_development_service');
Route::get('/web_application_development_service', 'FrontendController@web_application_development_service');
Route::get('/penetration_testing_service', 'FrontendController@penetration_testing_service');
Route::get('/hardening_service', 'FrontendController@hardening_service');
Route::get('/digital_forensic_service', 'FrontendController@digital_forensic_service');
/* Contact Page */
Route::get('/contact_us', 'FrontendController@contact_form');
Route::post('/send_customer_message', 'FrontendController@send_customer_message');

/*------------------------------ Backend Route ---------------------------*/

/* Course Route */
Route::get('add_course', 'CourseController@add');
Route::post('store_course', 'CourseController@store');

Route::get('edit_course/{course_id}', 'CourseController@edit');
Route::post('update_course/{course_id}', 'CourseController@update');

Route::get('view_course', 'CourseController@view');
Route::get('delete_course/{course_id}', 'CourseController@destroy');

/* Testimony Route */
Route::get('add_testimony', 'TestimonyController@add');
Route::post('store_testimony', 'TestimonyController@store');

Route::get('edit_testimony/{testimony_id}', 'TestimonyController@edit');
Route::post('update_testimony/{testimony_id}', 'TestimonyController@update');

Route::get('view_testimony', 'TestimonyController@view');
Route::get('delete_testimony/{testimony_id}', 'TestimonyController@destroy');

/*News Route */
Route::get('add_news', 'NewsController@add');
Route::post('store_news', 'NewsController@store');

Route::get('edit_news/{news_id}', 'NewsController@edit');
Route::post('update_news/{news_id}', 'NewsController@update');

Route::get('view_news', 'NewsController@view');
Route::get('delete_news/{news_id}', 'NewsController@destroy');


/* Payment Route */
Route::get('view_payment', 'PaymentController@view');
/* Registration Route */
Route::get('view_registration', 'RegistrationController@view');

/*---------------------------- Template Page -----------------------------*/
Route::get('page/add', 'PageController@create');
Route::get('page/{page}/delete', [
    'as'   => 'page.delete',
    'uses' => 'PageController@destroy',
]);


/* redirect views directory for specific controller
example: in FrontendController, the chosen views are in folder called 'view/frontend', to make it short, then use Route::resource
*/
Route::resource('/frontend', 'FrontendController');
Route::resource('/backend/course', 'CourseController');
Route::resource('/backend/registration', 'RegistrationController');
Route::resource('/backend/payment', 'PaymentController');
Route::resource('/page', 'PageController');

/*
function is_active_sorter($key, $direction = 'ASC')
{
    if (request('sortby') == $key && request('sortdir') == $direction) {
        return true;
    }

    return false;
}
*/

