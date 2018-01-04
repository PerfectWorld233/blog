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

Route::group(['prefix'=>'admin','middleware' => 'admin'], function() {
    //后台管理员
    Route::any('logout', 'Admin\AuthController@logout');
    Route::any('register', 'Admin\AuthController@register');

//  网站信息
//    Route::get('/', 'AdminController@index');
    Route::get('/', 'Admin\InfoController@index');

//    Route::get('/admin/publish_article', 'Admin\ArticleController@index');
//  文章
    Route::resource('article', 'Admin\ArticleController');
//    Route::resource('article/cc', 'Admin\ArticleController@cc');
//  标签
    Route::resource('tag', 'Admin\TagController');
//  配置项
    Route::resource('config', 'Admin\ConfigController');
//  友链管理
    Route::resource('link', 'Admin\LinkController');
//  网站信息
//    Route::get('info', 'Admin\InfoController@index');

});

//Route::resource('/admin/article', 'Admin\ArticleController');
Route::any('admin/login', 'Admin\AuthController@login');


