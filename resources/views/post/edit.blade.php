@extends('layout.post_layout')

@section('title', 'Update Post')

@section('css')
<link rel="stylesheet" href="{{ asset('css/posts/form.css') }}">
@endsection

@section('content')

<div class="content">
  <h1 class="content_title">Update a post</h1>

  <form action="{{ route('post.update', ['post' => $post->id]) }}" method="post" class="content_form">
    @csrf
    @method('PUT')

    @if (session('success'))
      <h6 class="content_message">
        {{ session('success') }}
      </h6>
    @endif

    @error('title')
      <h6 class="content_message content_error">
        {{ $message }}
      </h6>
    @enderror
    <label class="label" for="title">Title</label>
    <input value="{{ $post->title }}" class="input" type="text" name="title">

    @error('description')
      <h6 class="content_message content_error">
        {{ $message }}
      </h6>
    @enderror

    <label class="label" for="description">Description</label>
    <textarea class="input" name="description" cols="30" rows="10">{{ $post->description }}</textarea>

    @error('author')
      <h6 class="content_message content_error">
        {{ $message }}
      </h6>
    @enderror

    <label class="label" for="author">Author</label>
    <input value="{{ $post->author }}" class="input" type="text" name="author">

    <button type="submit" class="form_btn">update post</button>
  </form>
</div>

@endsection