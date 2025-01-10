<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold mb-4 text-gray-800">Create a New Blog Post</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" name="title" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <input type="text" name="description" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content:</label>
                <textarea name="content" rows="6" class="w-full p-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600">Create Post</button>
            </div>
        </form>
    </div>
@endsection
