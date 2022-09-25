@extends('layouts.main')

@section('container')
    @foreach($posts as $post)
        <article>
            <h4>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}        
                </a>
            </h4>
            <h5>By: Hafizd M.</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection