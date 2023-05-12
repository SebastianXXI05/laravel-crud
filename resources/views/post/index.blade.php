@extends('layout.post_layout')

@section('title', 'Posts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/posts/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/posts.css') }}">
@endsection

@section('content')
<div class="index_container">
  <main class="main">
    @if (session('success'))
    <h6 class="content_message">
      {{ session('success') }}
    </h6>
    @endif
    <h1 class="main_title">Posts</h1>

    @if (sizeof($posts) === 0)
    <h2 class="main_num">There is not posts</h2>
    @endif

    <div class="main_posts">
      @foreach ($posts as $post)
      <article>
        <x-post title="{{ $post->title }}" author="{{ $post->author }}" link="{{ route('post.show', ['post' => $post->uuid]) }}" />
      </article>
      @endforeach
    </div>
  </main>
</div>
@endsection