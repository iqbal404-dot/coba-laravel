@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post By : {{ $name }}</h1>
@foreach ($posts as $post)
    <article>
        <h2><a href="/blog/{{ $post->slug }}">{{ $post->judul }}</a></h2>
        <p>in <a href="/kategori/{{ $post->kategori->slug }}">{{ $post->kategori->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
    </article>
    <hr>
@endforeach
</div>
@endsection