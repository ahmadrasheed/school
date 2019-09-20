<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Http\Resources\PostResource;
use App\Post;


class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    dd('indexing');
        $posts=Post::get();
        return PostResource::collection($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
    //     $post=new Post;
    //     $post->title=$request->input('title');
    //     $post->short=$request->input('short');
    //     $post->body=$request->input('body');
    //     $post->image=$request->input('image');
    //     $post->inside_image=$request->input('inside_image');.
        //dd('update'.$id);
        dd($request->input('token'));
        if($post=Post::create($request->all()))
        {
            //return new PostResource($post);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "showing .....";
        $post = Post::findOrFail($id);
       
        // Return a single post as a resource
        return new PostResource($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
     
        $post->title=$request->input('title');
        $post->short=$request->input('short');
        $post->body=$request->input('body');
        $post->image=$request->input('image');
        $post->inside_image=$request->input('inside_image');

        if($post->save())
            {
              return new PostResource($post);  
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // Get the post
        $post = Post::findOrFail($id);
        
        //  Delete the post, return as confirmation
        if ($post->delete()) {
            return new PostResource($post);
        }
    }
}
