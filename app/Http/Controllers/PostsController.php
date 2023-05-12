<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\ValidatePostRequest;

class PostsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index() {
    $posts = Post::all();
    
    return view('post.index', ['posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    $numPosts = Post::count();

    return view('post.create', ['num' => $numPosts]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(ValidatePostRequest $request) {
    $post = new Post;
    $post->title = $request->title;
    $post->description = $request->description;
    $post->author = $request->author;
    $post->save();
  
    return redirect()->route('post.create', [] ,201)->with('success', 'Post created successfly');
  }

  /**
   * Display the specified resource.
   */
  public function show($uuid) {
    $post = Post::searchUuid($uuid);

    return view('post.show', ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($uuid) {
    $post = Post::where('uuid', $uuid)->get()[0];

    return view('post.edit', ['post' => $post]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
