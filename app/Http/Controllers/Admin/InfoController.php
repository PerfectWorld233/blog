<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class InfoController extends Controller
{
    public function index(){
//        dd(School::all());die;
//        $school =  DB::table('users')->paginate(15);
//        return view('admin.school', ['school'=> Article::all()]);
        return view('admin.info');
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
