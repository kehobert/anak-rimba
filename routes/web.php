<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('frontend', 'FrontendController@index');

/*
Route::get('course', function(){
    return view('frontend.course');
});*/

Route::get('course', 'FrontendController@course');
Route::get('registration', 'FrontendController@registration');

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


