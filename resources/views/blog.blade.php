@extends('layouts.main')

@section('container')
@if ($posts->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/random/1200x400/?{{ $posts[0]->kategori->name }}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}"><h5 class="card-title">{{ $posts[0]->judul }}</h5></a>
    <p>By. <a class="text-decoration-none" href="/author/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/kategori/{{ $posts[0]->kategori->slug }}">{{ $posts[0]->kategori->name }}</a></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a class="btn btn-primary" href="/blog/{{ $posts[0]->slug }}" role="button">Baca Selengkapnya</a>
    <p class="card-text mt-2"><small class="text-muted">{{ $posts[0]->created_at->diffFOrHumans() }}</small></p>
  </div>
</div>
@else
    <p class="text-center fs-4">Belum Ada Postingan.</p>
@endif

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card mb-3">
        <img src="https://source.unsplash.com/random/500x400/?{{ $post->kategori->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <a class="text-decoration-none text-dark" href="/blog/{{ $post->slug }}"><h5 class="card-title">{{ $post->judul }}</h5></a>
          <p>By. <a class="text-decoration-none" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/kategori/{{ $post->kategori->slug }}">{{ $post->kategori->name }}</a></p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a class="btn btn-primary" href="/blog/{{ $post->slug }}" role="button">Baca Selengkapnya</a>
          <p class="card-text mt-2"><small class="text-muted">{{ $post->created_at->diffFOrHumans() }}</small></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection