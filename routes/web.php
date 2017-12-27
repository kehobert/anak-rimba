<?php

Auth::routes();

/*---------------------------- Frontend Route --------------------------*/

Route::get('/', 'FrontendController@index'); //Homepage

Route::get('course', 'FrontendController@course');
Route::get('/course_details/{course_id}', 'FrontendController@course_details');
Route::get('/registration/{registration_id}', 'FrontendController@registration');
Route::post('/register_entry/{course_id}', 'FrontendController@register_entry');
Route::get('/checkout/{registration_id}', 'FrontendController@checkout');

Route::get('/payment', 'FrontendController@payment_confirmation'); //Load Payment Confirmation Page
Route::post('/confirm_payment', 'FrontendController@submit_payment_confirmation'); //Insert the Payment Confirmation Information to Database
Route::get('/thank_you', 'FrontendController@redirect_payment_confirmation'); //Redirect to this page
/* Additional Pages */
Route::get('/about_us', 'FrontendController@about_us');

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

