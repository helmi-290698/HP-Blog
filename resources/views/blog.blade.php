


@extends('layouts.main')
    @section('container')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-3">
    <h2><a href="/blog/{{ $post->slug  }}" class="text-decoration-none">{{ $post->title }}</a></h2>
    <p>By. Helmi paturohman In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
   
    {{-- <h5>{{ $post->author }}</h5> --}}
    <p>{{ $post->excerpt }}</p>
    <a href="/blog/{{ $post->slug }}"> Read More</a>
    </article>
    @endforeach
    
    @endsection
