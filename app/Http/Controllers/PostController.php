<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // 追加
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class PostController extends Controller 
{
    public function show($id) {
        //$posts = DB::table('posts')->get(); //postsテーブルから全データを取得
        $post = Post::findOrFail($id); 
        
        //return view('posts.index',['posts' => $posts]);  // viewに渡す
        return view('posts.show',compact('post'));  // 取得したデータをビューに渡す
    }

    public function __construct()
{
    $this->middleware('auth'); // ログインしているユーザーのみアクセス可能にする
}

//【データの作成とバリデーションの課題】ーーーー
//（create アクション）投稿作成画面を表示するアクション・２つのアクション追加（新規投稿を作成のフォーム）
public function create()
    {
        return view('posts.create');
}
    //（storeアクション）送信されたデータを受け取り、バリデーション。データベースに保存。投稿一覧ページにリダイレクト
    public function store(Request $request)
        {
    // バリデーション（required＝入力必須）
    $request->validate([
        'title' => 'required|max:20',
        'content' => 'required|max:200',
    ]);

    // データの保存
    Post::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);

    // 投稿一覧ページへリダイレクト
    return redirect('/posts');
    }
}