<?php
// ルーティングを設定するコントローラを宣言する
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//そのURLにアクセスしたときに実行する処理」を(ルーティング)に直接記述する代わりにpostControllerのindexアクションを指定。
Route::get('/posts', [PostController::class, 'index']);
// 投稿作成画面を表示するルート　(データの作成機能とバリデーションの実装)ーーーーーーーーーーーーー
Route::get('/posts/create', [PostController::class, 'create']);
// 投稿データを保存するルート
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');;

/*【お願いリクエスト:「このページの情報をください」というお願いを出すGETメソッド】【名前がつけられたルートのことを、名前付きルートといいます。基本的に名前は自由につけられますが、posts.indexのように基準となるURL.アクション名とする。
「/posts/1」「/posts/5」のように可変の値を含むURLにアクセスした際、PostControllerのshowアクションが実行されるようにルーティングを設定します。*/
Route::get('/posts/{id}',[PostController::class, 'show']);

