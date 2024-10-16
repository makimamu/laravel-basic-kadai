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
