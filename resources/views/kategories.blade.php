@extends('layouts.main')

@section('container')
<h1 class="mb-5">Kategori-kategori</h1>
@foreach ($kategories as $kategori)
<ul>
    <li><h2><a href="/kategori/{{ $kategori->slug }}">{{ $kategori->name }}</a></h2></li>
</ul>
@endforeach
</div>
@endsection