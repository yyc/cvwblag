<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Auth;

class PostViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::query()->select("*")->orderBy("created_at", "dsc")->paginate(10);
        return view("index", ["posts" => $posts]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with("comments")->findOrFail($id);
        if(Auth::check()){
            $user = Auth::user()->name;
        } else{
            $user = "Anonymous";
        }
        return view("post", ["post" => $post, "user" => $user]);
    }
    public function comment(Request $request, $id)
    {
        $post = Post::with(["comments", "comments.user"])->findOrFail($id);
        $comment = $post->comments()->create(["content" => $request->content]);
        if(!Auth::check() || $request->anonymous!=""){
            $comment->user_id = null;
        } else{
            $comment->user_id = Auth::user()->id;
        }
        $comment->save();
        echo $request->anonymous;    
        return redirect("/post/$id");
    }
}
