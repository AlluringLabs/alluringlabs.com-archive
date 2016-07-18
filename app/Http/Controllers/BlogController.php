<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SEO;
use App\Post;
use App\Http\Requests;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Post::where('published', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('blog.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        SEO::setTitle($post->title);

        return view('blog.post', ['post' => $post]);
    }

}
