<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //berfungsi me return semua posts yang ada
        return view('home', [
            "title" => "Home",
            "posts" => Post::all()
        ]);
    }

    public function indexAdmin()
    {
        //berfungsi me return semua posts yang ada
        return view('admin_post_view', [
            "title" => "Admin Post View",
            "posts" => Post::all()
        ]);
    }

    //berfungsi me return semua posts yang ada sesuai dengan type nya
    public function shows(){
        return view('posts', [
            "title" => "abc",
            // "posts" => Post::where('type', 'health')
            "posts" => Post::where('type', 'health')
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //berfungsi untuk me return view single post
        return view('post', [
            "title" => "Single Post",
            // "post" => Post::find($post)
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
