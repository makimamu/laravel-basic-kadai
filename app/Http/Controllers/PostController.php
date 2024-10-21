<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller; // 追加
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller {
    public function index() {

        $posts = DB::table('posts')->get(); //postsテーブルから全データを取得
        
        return view('posts.index',['posts' => $posts]);  // viewに渡す
    }
}
