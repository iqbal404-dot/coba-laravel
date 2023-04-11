@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->judul }}</h2>
    <p>By. Muhammad Iqbal in <a href="/kategori/{{ $post->kategori->slug }}">{{ $post->kategori->name }}</a></p>
    <p>{!! $post->body !!}</p>
</article>

<a href="/blog"> < Back to Blog</a> 

@endsection