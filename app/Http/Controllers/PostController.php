<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function json()
    {
        $posts = Post::paginate(5); // 5 is the number of items to show per page
        return response()->json($posts);
    }
}
