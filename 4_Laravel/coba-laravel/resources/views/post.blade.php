@extends('layouts.main')

@section('container')
    <article>
        <h4>{{ $post->title }}</h4>
        <h5>By: Hafidz M.</h5>
        <p>Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{!! $post->body !!}</p>
    </article>

<a href="/blog">Back to blog</a>
@endsection