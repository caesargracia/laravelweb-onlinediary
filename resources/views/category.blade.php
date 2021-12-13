
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1> 

@foreach ($blog as $post)
    <article class="mb-5 border-bottom">
        <h2>
            <a href = "/blog/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }}</a>
        </h2>
        <h5>By : <a href="/authors/{{ $post->user->id }}" class="text-decoration-none"> {{ $post->user->name }} </a></h2>
        <p> {{ $post->excerpt }} </p>  
    </article>
    @endforeach
@endsection

