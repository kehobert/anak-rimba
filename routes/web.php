<?php

Auth::routes();
Route::get('/', 'FrontendController@index');

/*
Route::get('course', function(){
    return view('frontend.course');
});*/

Route::get('course', 'FrontendController@course');
Route::get('/course_details/{course_id}', 'FrontendController@course_details');
Route::get('/registration/{registration_id}', 'FrontendController@registration');
Route::post('/register_entry/{course_id}', 'FrontendController@register_entry');
Route::get('/checkout/{registration_id}', 'FrontendController@checkout');


//Load Payment Confirmation Page
Route::get('/payment_confirmation', 'FrontendController@payment_confirmation');
//Input the Payment Confirmation Information to Database
Route::post('/confirm_payment', 'FrontendController@submit_payment_confirmation');
//Redirect to this page
Route::get('/thank_you', 'FrontendController@redirect_payment_confirmation');

/* Additional Pages */
Route::get('/about_us', 'FrontendController@about_us');



Route::get('page/add', 'PageController@create');
Route::get('page/{page}/delete', [
    'as'   => 'page.delete',
    'uses' => 'PageController@destroy',
]);



/* basic routing
Route::get('hello', function(){
    return view('frontend.index');
});
*/

/* redirect views directory for specific controller
example: in FrontendController, the chosen views are in folder called 'view/frontend', to make it short, then use Route::resource
*/
Route::resource('/frontend', 'FrontendController');
Route::resource('/page', 'PageController');


function is_active_sorter($key, $direction = 'ASC')
{
    if (request('sortby') == $key && request('sortdir') == $direction) {
        return true;
    }

    return false;
}


