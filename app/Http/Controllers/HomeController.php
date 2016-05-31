<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('published', 1)->orderBy('created_at', 'desc')->take(3)->get();
        return view('index', ['posts' => $posts]);
    }
}
