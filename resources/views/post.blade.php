

@extends('layouts.main')
@section('container') 
 
        <h2>{{ $posts->title }}</h2>

        <p>By. Helmi paturohman In <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a> </p>
        {!! $posts->body !!}
   
    <a href="/blog">back to post </a>
@endsection


