<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPost = Post::get()->random(4);
        $PopularPost = Post::withCount('likedUser')->orderBy('liked_user_count', 'DESC')->get()->take(4);
        return view('post.index', compact('posts', 'randomPost', 'PopularPost'));
    }
}
