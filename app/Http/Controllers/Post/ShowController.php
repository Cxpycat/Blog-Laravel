<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);
        $date_created_at = Carbon::parse($post->created_at)->translatedFormat('d F Y - H:i ');
        return view('post.show', compact('post', 'date_created_at','relatedPosts'));
    }
}
