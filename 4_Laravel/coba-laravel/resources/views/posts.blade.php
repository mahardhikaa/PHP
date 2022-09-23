@extends('layouts.main')

@section('container')
    @foreach($posts as $post)
        <article>
            <h4>
                <a href="/posts/{{ $post["slug"] }}">
                    {{ $post["judul"] }}        
                </a>
            </h4>
            <h5>By: {{ $post["by"] }}</h5>
            <p>{{ $post["post"] }}</p>
        </article>
    @endforeach
@endsection