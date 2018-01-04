<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagController extends Controller
{
    public function index(){
//        dd(School::all());die;
//        $school =  DB::table('users')->paginate(15);
//        return view('admin.school', ['school'=> Article::all()]);
        return view('admin.tags.index');
    }
    public function store(){

    }

    public function destroy(){

    }

    public function show(){

    }

    public function update(){


    }
}
