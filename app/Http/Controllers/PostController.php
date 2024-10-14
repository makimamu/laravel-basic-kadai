<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // 追加
use Illuminate\Http\Request;


class PostController extends Controller {
    public function index() {
        return view('posts.index');  // viewの名前はファイルパスと一致させる
    }
}
