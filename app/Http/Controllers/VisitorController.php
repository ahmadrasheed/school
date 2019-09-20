<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class VisitorController extends Controller
{
    public function index(){
        $posts=Post::paginate(3);
        
        return view('visitor.home',compact('posts'));
    }


    public function show($id){

        $post=Post::findOrFail($id);
        return view('visitor.show',compact('post'));
    }
}
