<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Posts;

class PostController extends Controller
{
    // 文章列表
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(3);
//        var_dump($posts->toArray()); exit;
    	return view('posts/index', compact('posts'));
    }

    // 文章详情
    public function show(Posts $post)
    {
//        var_dump($post); exit;
        // 这边的Posts  是模型的class名字
    	return view('posts/show', compact('post'));
    }

    // 创建文章
    public function create()
    {
    	return view('posts/create');
    }
    
    // 编辑文章
    public function edit()
    {
    	return view('posts/edit');
    }

    // 删除文章
}
