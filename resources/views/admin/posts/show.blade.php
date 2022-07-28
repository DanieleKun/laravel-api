@extends('admin.layouts.base')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h3>Written by: <strong>{{ $post->user->name }}</strong></h3>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <h3>In category: {{ $post->category->name }}</h3>
    <div class="tags">
        @foreach ($post->tags as $tag)
            <span class="tag">{{ $tag->name }}</span>
        @endforeach
    </div>
    <p>{{ $post->content }}</p>
@endsection
