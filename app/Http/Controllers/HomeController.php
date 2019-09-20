<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // i'ts not used I may delete it later
        $posts=Post::all();
        //dd($posts);
        return view('visitor.home',compact('posts'));
        
    }
}
