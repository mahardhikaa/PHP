@extends('layouts.main')

@section('container')
    <h3>Categories</h3>

    @foreach($categories as $category)
        <ul>
            <li>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </li>
        </ul>
    @endforeach
@endsection