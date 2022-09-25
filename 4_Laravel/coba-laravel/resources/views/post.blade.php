@extends('layouts.main')

@section('container')
    <article>
        <h4>{{ $post["title"] }}</h4>
        <h5>By: {{ $post["by"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

<a href="/blog">Back to blog</a>
@endsection