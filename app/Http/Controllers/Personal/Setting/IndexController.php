<?php

namespace App\Http\Controllers\Personal\Setting;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $categories = Category::all();
        $posts = Post::all();
        $tags = Tag::all();
        return view('personal.setting.index', compact('users', 'categories', 'posts', 'tags'));
    }
}
