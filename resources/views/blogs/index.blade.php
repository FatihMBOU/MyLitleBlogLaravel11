@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">Blogs</h1>
    @foreach ($blogs as $blog)
    <div>
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->content }}</p>
        <p>Door: {{ $blog->user->name }}</p>
    </div>
@endforeach





    <div class="mt-4">
        {{ $blogs->links() }}
    </div>
</div>
@endsection
