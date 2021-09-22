<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // -------------------------------------------------------index
    public function index()
    {
        $allPosts = Post::all();
        $allPosts = $allPosts->reverse();
        return view('posts.index', compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // -------------------------------------------------------Create
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // -------------------------------------------------------Store
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => ['required', 'url'],
            'category_id' => 'required',
        ]);

        $data = $request->all();

        $post = new Post;
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->img = $data['img'];
        $post->category_id = $data['category_id'];

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // -------------------------------------------------------Show
    public function show($id)
    {
        $selectedPost = Post::find($id);
        return view('posts.show', compact('selectedPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // -------------------------------------------------------Edit
    public function edit(Post $post, Category $category)
    {
        // dd($post);
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // -------------------------------------------------------update
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => ['required', 'url'],
            'category_id' => 'required',
        ]);

        $data = $request->all();

        $post->update($data);
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // -------------------------------------------------------destroy
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
