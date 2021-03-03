<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title= $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','Post has been created Successfully');
    }
    //getting all post in table
    public function getPost()
    {
        $posts = Post::orderBy('id','ASC')->get();
        return view('posts',compact('posts'));
    }

    //getting single post by getting id
    public function getPostById($id)
    {
        $post = Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    //deleting post by getting id
    public function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted');
    }

    //getting values from db by getting id
    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post',compact('post'));
    }

    //updating post by getting id
    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_updated','Post has been updated successfully');
    }
}

