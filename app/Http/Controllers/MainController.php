<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class MainController extends Controller
{
    public function index(): Response
    {
        $posts = Post::query()
            ->orderByDesc('created_at')
            ->take(6)
            ->get();

        return response()->view('main', compact('posts'));
    }
}
