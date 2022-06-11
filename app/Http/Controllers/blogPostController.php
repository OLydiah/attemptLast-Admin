<?php

namespace App\Http\Controllers;

use App\Models\blogPost;
use Illuminate\Http\Request;

class blogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all blog posts
        $posts = blogPost::all(); //fetch all posts from db
        //return $posts; 
        return view('blogs.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show form to create a blog post
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store new blog post
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(blogPost $blogPost)
    {
        // show a blog post
        return $blogPost;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(blogPost $blogPost)
    {
        // show form to edit blog post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogPost $blogPost)
    {
        // save editted posts
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogPost $blogPost)
    {
        // delete a post
    }
}
