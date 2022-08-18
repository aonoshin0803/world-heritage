<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 投稿一覧
     */
    public function index()
    {
        $target = '青野です！';
        return view('posts.index', compact('target'));
    }

    /**
     * 新規投稿作成
     */
    public function create()
    {
        return view('posts.create');
    }
}
