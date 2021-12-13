<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        $blog = Post::latest();
        if(request('search')){
            $blog->where('title', 'like','%' . request('search') . '%');
        }

        return view('blog', [
            "title" => "Blog",
            "blog" => $blog->get()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Detailed Post",
            "post" => Post::find($slug)
        ]) ;
    }
}
