<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p>{{ $post->content }}</p>
    <p>Posted by {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</p>
@endsection
