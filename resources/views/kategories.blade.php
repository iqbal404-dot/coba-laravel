@extends('layouts.main')

@section('container')
<h1 class="mb-5">Kategori-kategori</h1>

<div class="row">
    @foreach ($kategories as $kategori)
    <div class="col-md-4 mb-4">
        <a href="/kategori/{{ $kategori->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/random/300x200/?{{ $kategori->name }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{ $kategori->name }}</h5>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection