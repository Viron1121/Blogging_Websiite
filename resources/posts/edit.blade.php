<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $post->title }}" required><br>

        <label for="description">Description:</label>
        <input type="text" name="description" value="{{ $post->description }}" required><br>

        <label for="content">Content:</label>
        <textarea name="content" required>{{ $post->content }}</textarea><br>

        <button type="submit">Update Post</button>
    </form>
@endsection
