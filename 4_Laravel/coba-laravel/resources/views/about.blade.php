@extends('layouts.main')

@section('container')
    <h2>{{ $nama }}</h2>
    <h6>{{ $email }}</h6>
    <h6>{{ $alamat }}</h6>
    <img src="img/gambar3.png" class="img-thumbnail rounded-circle" width=150>
@endsection