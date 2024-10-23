<?php

// ルーティングを設定するコントローラを宣言する
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//そのURLにアクセスしたときに実行する処理」を(ルーティング)に直接記述する代わりにpostControllerのindexアクションを指定。
Route::get('/posts', [PostController::class, 'index']);
// 投稿作成画面を表示するルート　(データの作成機能とバリデーションの実装)ーーーーーーーーーーーーー
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// 投稿データを保存するルート
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/store', [PostController::class, 'store']);
/*【お願いリクエスト:「このページの情報をください」というお願いを出すGETメソッド】【名前がつけられたルートのことを、名前付きルートといいます。基本的に名前は自由につけられますが、posts.indexのように基準となるURL.アクション名とする。
「/posts/1」「/posts/5」のように可変の値を含むURLにアクセスした際、PostControllerのshowアクションが実行されるようにルーティングを設定します。*/
Route::get('/posts/{id}',[PostController::class, 'show']);

