<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>All Blog Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
            <p>{{ $post->description }}</p>
            <p>Posted by {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
    {{ $posts->links() }} <!-- Pagination -->
@endsection
