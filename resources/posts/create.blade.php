<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create a New Blog Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>

        <label for="description">Description:</label>
        <input type="text" name="description" required><br>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea><br>

        <button type="submit">Create Post</button>
    </form>
@endsection
