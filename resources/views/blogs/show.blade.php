@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">{{ $blog->title }}</h1>
    <p class="text-sm text-gray-500">By {{ $blog->user->name }}</p>
    <div class="mt-4">
        <p>{{ $blog->content }}</p>
    </div>

    <hr class="my-4">

    <h2 class="text-xl font-semibold">Comments</h2>
    @foreach ($blog->comments as $comment)
        <div class="border-b py-2">
            <p>{{ $comment->content }}</p>
            <p class="text-sm text-gray-500">By {{ $comment->user->name }}</p>
        </div>
    @endforeach

    @auth
        <form action="{{ route('comments.store', $blog) }}" method="POST" class="mt-4">
            @csrf
            <textarea name="content" class="w-full border p-2" rows="3" placeholder="Add a comment..." required></textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2">Post Comment</button>
        </form>
    @endauth
</div>
@endsection
