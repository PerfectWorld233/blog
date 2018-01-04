<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class ArticleController extends Controller
{
    public function index(){
//        print_r(Article::all());die;
//        $school =  DB::table('users')->paginate(15);
//        return view('admin.school', ['school'=> Article::all()]);
        return view('admin.article.index', ['articles'=> Article::all()]);
    }

    public function create(){

        return view('admin.article.create');
    }

    public function store(Request $request){
        /*[_token] => el14FbIWfOWbx9AmVzoKvtZ5DitirQd9UuLX9oxs [title] => 111 [category] => 2222 [keyword] => 444 [editor1] =>
5555*/
//        print_r($request->input('keyword'));die;
        $data['title'] = $request->input('title');
        $data['category'] = $request->input('category');
        $data['tags'] = $request->input('tags');
        $data['author'] = $request->input('author');
        $data['keyword'] = $request->input('keyword');
        $data['content'] = $request->input('editor1');
//        print_r($data);die;
        $res = Article::create($data);

        if($res){
            return Redirect::to('admin/article');
        }else{
            return Redirect::back();
        }
//        print_r($cc);die;
//        Borrow::create($request->all());
//        print_r($request->all());die;
    }

    public function destroy(){

    }

    public function show(){

    }

    public function update(){


    }


    public function cc(Request $request){
        print_r($request->all());die;
    }
    /*  **laravel post 请求要求携带 token ， 否则提交失败**
    Route::resource('users', 'UsersController');
    =====================================================================
    Route::get('/users', 'UsersController@index')->name('users.index');

    Route::get('/users/{user}', 'UsersController@show')->name('users.show');

    Route::get('/users/create', 'UsersController@create')->name('users.create');

    Route::post('/users', 'UsersController@store')->name('users.store');                //  提交数据插入数据库

    Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

    Route::patch('/users/{user}', 'UsersController@update')->name('users.update');

    Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
    */

}
