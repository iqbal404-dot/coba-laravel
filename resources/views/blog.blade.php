@extends('layouts.main')

@section('container')
<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($posts as $post)
  <div class="col">
    <div class="card">
      <div class="card-body">
        <a href="/blog/{{ $post->slug }}"><h5 class="card-title">{{ $post->judul }}</h5></a>
        <p class="card-text">{{ $post->excerpt }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection