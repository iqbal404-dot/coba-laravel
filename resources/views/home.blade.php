@extends('layouts.main')

@section('corousel')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/corousel/corousel5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/corousel/corousel2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/corousel/corousel3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

@section('container')
  @if (count($posts) > 0)
      @if ($posts[0])
          @if (isset($posts[1]) && isset($posts[2]))
          <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1200x300/?{{ $posts[0]->kategori->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}"><h5 class="card-title">{{ $posts[0]->judul }}</h5></a>
              <p>By. <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?kategori={{ $posts[0]->kategori->slug }}">{{ $posts[0]->kategori->name }}</a></p>
              <p class="card-text">{{ $posts[0]->excerpt }}</p>
              <a class="btn btn-primary" href="/blog/{{ $posts[0]->slug }}" role="button">Baca Selengkapnya</a>
              <p class="card-text mt-2"><small class="text-muted">{{ $posts[0]->created_at->diffFOrHumans() }}</small></p>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="card">
                  <img src="https://source.unsplash.com/random/500x200/?{{ $posts[1]->kategori->name }}" class="card-img-top" alt="{{ $posts[1]->kategori->name }}">
                  <div class="card-body text-center">
                    <a class="text-decoration-none text-dark" href="/blog/{{ $posts[1]->slug }}"><h5 class="card-title">{{ $posts[1]->judul }}</h5></a>
                    <p>By. <a class="text-decoration-none" href="/blog?author={{ $posts[1]->author->username }}">{{ $posts[1]->author->name }}</a> in <a class="text-decoration-none" href="/blog?kategori={{ $posts[1]->kategori->slug }}">{{ $posts[1]->kategori->name }}</a></p>
                    <p class="card-text">{{ $posts[1]->excerpt }}</p>
                    <p class="card-text mt-2"><small class="text-muted">{{ $posts[1]->created_at->diffFOrHumans() }}</small></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="card">
                  <img src="https://source.unsplash.com/random/500x200/?{{ $posts[2]->kategori->name }}" class="card-img-top" alt="{{ $posts[2]->kategori->name }}">
                  <div class="card-body text-center">
                    <a class="text-decoration-none text-dark" href="/blog/{{ $posts[2]->slug }}"><h5 class="card-title">{{ $posts[2]->judul }}</h5></a>
                    <p>By. <a class="text-decoration-none" href="/blog?author={{ $posts[2]->author->username }}">{{ $posts[2]->author->name }}</a> in <a class="text-decoration-none" href="/blog?kategori={{ $posts[2]->kategori->slug }}">{{ $posts[2]->kategori->name }}</a></p>
                    <p class="card-text">{{ $posts[2]->excerpt }}</p>
                    <p class="card-text mt-2"><small class="text-muted">{{ $posts[2]->created_at->diffFOrHumans() }}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
          <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1200x300/?{{ $posts[0]->kategori->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}"><h5 class="card-title">{{ $posts[0]->judul }}</h5></a>
              <p>By. <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?kategori={{ $posts[0]->kategori->slug }}">{{ $posts[0]->kategori->name }}</a></p>
              <p class="card-text">{{ $posts[0]->excerpt }}</p>
              <a class="btn btn-primary" href="/blog/{{ $posts[0]->slug }}" role="button">Baca Selengkapnya</a>
              <p class="card-text mt-2"><small class="text-muted">{{ $posts[0]->created_at->diffFOrHumans() }}</small></p>
            </div>
          </div>
          @endif
      @endif
  @endif
@endsection
