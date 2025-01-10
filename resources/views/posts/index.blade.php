@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">All Blog Posts</h1>

        @foreach ($posts as $post)
            <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-semibold text-blue-500 hover:text-blue-600">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </h3>
                <p class="text-gray-600 mt-2">{{ $post->description }}</p>
                <p class="text-sm text-gray-500 mt-1">
                    Posted by {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}
                </p>

                <div class="flex justify-between items-center mt-4">
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="mt-6">
            {{ $posts->links() }} <!-- Pagination -->
        </div>
    </div>
@endsection
