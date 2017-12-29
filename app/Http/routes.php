<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about_me', function () {
    return view('about_me');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/post_detail', function () {
    return view('post_detail');
});

Route::get('/post_grid', function () {
    return view('contack_us');
});

Route::group(['middleware' => 'admin'], function() {
    //后台管理员
    Route::any('admin/logout', 'Admin\AuthController@logout');
    Route::any('admin/register', 'Admin\AuthController@register');

    Route::get('/admin', 'AdminController@index');

});

Route::any('admin/login', 'Admin\AuthController@login');


