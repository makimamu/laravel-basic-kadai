<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // 追加
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller {
    public function show($id) {

        //$posts = DB::table('posts')->get(); //postsテーブルから全データを取得
        $post = Post::findOrFail($id); 
        
        //return view('posts.index',['posts' => $posts]);  // viewに渡す
        return view('posts.show',compact('post'));  // 取得したデータをビューに渡す
    }
}
