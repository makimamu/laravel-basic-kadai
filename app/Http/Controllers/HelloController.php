<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{

public function index(){
//view()ヘルパ関数でビューを指定するときはresources/viewsを省略し、フォルダ名.ファイル名（.blade.phpは不要）と記述します。
return view('index');
    }
}

