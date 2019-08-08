<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Gate;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $allPosts = post::all();
        return view("showPosts",["allPosts"=>$allPosts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createPost");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $this->validate(request(),[
        "title"=>"required",
        "body"=>"required",
    ]);

       post::create($data + ["owner_id"=>auth()->user()->id]);
       return back();
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {


        return view("post",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {/*
        
           
        if(auth()->user()->id != $post->owner_id){
            abort(403);
        }

        abort_if(auth()->id() != $post->owner_id,403);
        return view("update",compact("post"));
    } 
         abort_unless(auth()->id() != $post->owner_id,403);\

         if(Gate::allows("update",$post))
         {
            return view("update",compact("post"));
        }
       abort(403);
            abort_unless(GAte::allows("update",$post), 403);
            return view("update",compact("post"));

        */
            $this->authorize("update",$post);
            
            return view("update",compact("post"));

        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $this->validate(request(),["title"=>"required","body"=>"required"]);
        $post->update(request(["title","body"]));
        return redirect("post");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
       $post->delete();   
       return redirect("post");

   }
}
