@extends('layout.post_layout')

@section('title', 'Create Post')

@section('css')
<link rel="stylesheet" href="{{ asset('css/posts/create.css') }}">
@endsection

@section('content')

<div class="content">
  <h1 class="content_title">Create a new post</h1>
  <h2 class="content_count">Posts created: {{ $num }}</h2>

  <form action="{{ route('post.store') }}" method="post" class="content_form">
    @csrf

    @if (session('success'))
      <h6>
        {{ session('success') }}
      </h6>
    @endif

    <label class="label" for="title">Title</label>
    <input class="input" type="text" name="title">

    <label class="label" for="description">Description</label>
    <textarea name="description" cols="30" rows="10"></textarea>

    <label class="label" for="author">Author</label>
    <input class="input" type="text" name="author">

    <button type="submit" class="form_btn">Create new post</button>
  </form>
</div>

@endsection