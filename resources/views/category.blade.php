


@extends('layouts.main')
    @section('container')
    <h1>Blog Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
    <h2><a href="/blog/{{ $post->slug  }}">{{ $post->title }}</a></h2>
    <h5>{{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
    
    @endsection
