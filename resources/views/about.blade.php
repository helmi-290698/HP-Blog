@extends('layouts.main')
@section('container')
Nama : <p>{{ $name }}
</p>
email : <p>{{ $email }}</p>
<img src="image/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail ">

@endsection
   