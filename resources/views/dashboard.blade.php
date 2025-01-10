<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <h1>All Blog Posts</h1>
                    @isset($posts)
                        @if($posts->count())
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
                        @else
                            <p>No posts found.</p>
                        @endif
                    @else
                        <p>Posts data is not available yet.</p>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
