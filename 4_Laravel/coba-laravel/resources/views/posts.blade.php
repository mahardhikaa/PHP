@extends('layouts.main')

@section('container')
    <h3>Blog Post</h3>

    @foreach($posts as $post)
        <article class="border-bottom mb-4">
            <h4>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}        
                </a>
            </h4>
            <h5>
                <a href="/authors/{{ $post->authors->username }}">By: {{ $post->authors->name }}</a>
            </h5>
            <p>Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <p><a href="/posts/{{ $post->slug }}">Read More</a></p>
        </article>
    @endforeach
@endsection