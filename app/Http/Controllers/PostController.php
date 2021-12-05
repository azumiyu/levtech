<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Post;
>>>>>>> dev_basis02
use Illuminate\Http\Request;

class PostController extends Controller
{
<<<<<<< HEAD
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    }
=======
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
>>>>>>> dev_basis02
}
