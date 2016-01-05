<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Auth;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        return view("newpost");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'post' => 'required|min:1'
        ]);
        $request->user()->posts()->create([
            "header" => $request->title,
            "content" => nl2br(e($request->post))
        ]);
        return redirect("/index");
    }

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


    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index", "show", "comment"]]);
    }
}
