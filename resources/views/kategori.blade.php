@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Kategori : {{ $kategori }}</h1>
@foreach ($posts as $post)
    <article>
        <h2><a href="/blog/{{ $post->slug }}">{{ $post->judul }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach
</div>
@endsection