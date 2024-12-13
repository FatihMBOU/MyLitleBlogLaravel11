@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium">Title</label>
            <input type="text" name="title" id="title" class="w-full border p-2" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium">Content</label>
            <textarea name="content" id="content" class="w-full border p-2" rows="5" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Create</button>
    </form>
</div>
@endsection
