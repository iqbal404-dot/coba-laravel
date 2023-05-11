@extends('dashboard.layouts.main')

@section('container')
<article class="mt-3" style="text-align: justify">
    <h2>{{ $post->judul }}</h2>
    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
    <a href="" class="btn btn-info"><span data-feather="edit"></span> Edit</a>
    <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Hapus</a>
    <p>{!! $post->body !!}</p>
</article>
@endsection