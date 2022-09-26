@extends('layouts.main')

@section('container')
    <h3>Post Category: {{ $posts->name }}</h3>

    @foreach($posts->post as $post)
        <article>
            <h4>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}        
                </a>
            </h4>
            <h5>By: Hafizd M.</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

    <h6><a href="/categories">Back to categories</a></h6>
@endsection