@extends('main')

@section('container')
    @foreach ($posts as $post)
        {{-- melakukan perulangan sejumlah posts --}}
        <article>
            <a href="/posts/{{ $post->slug }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <h5>By: {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
