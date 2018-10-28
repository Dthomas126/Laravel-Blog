<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    //Display all users posts
    public function show($id){

        $posts = Post::find($id);

        return view('posts.show', compact('posts'));
        
    }
}
