@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman BlogPost</h1>

@foreach ($posts as $post)
<article>
    <h2>
    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a> 
    </h2>
    {{ $post->excerpt }}
</article>
@endforeach

@endsection
