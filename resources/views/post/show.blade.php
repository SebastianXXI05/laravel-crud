@extends('layout.post_layout')

@section('title') {{ $post->title }} @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/posts/show.css') }}">
@endsection

@section('content')

<div class="content">
  <div class="content_items">
    <header>
      <h2 class="content_author">{{ $post->author }}</h2>
      <h1 class="content_title">{{ $post->title }}</h1>
    </header>
    <p class="content_paragraph">{{ $post->description }}</p>

    <form action="{{ route('post.destroy', ['post' => $post->id]) }}"
     method="post" 
     class="content_buttons">
      @csrf
      @method('DELETE')
      <a class="btn" href="{{ route('post.edit', ['post' => $post->uuid]) }}">Edit</a>
      <button type="submit" class="btn btn-delete">
        Delete
      </button>
    </form>
  </div>
</div>

@endsection