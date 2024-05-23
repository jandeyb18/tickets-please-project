<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'user_id' => auth()->id()
        ]);
    }
}
