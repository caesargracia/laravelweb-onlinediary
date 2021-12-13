@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/blog" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/blog/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3" onclick="return confirm('Delete post?')"><span data-feather="trash"></span> Delete</button>
            </form>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid mt-2">
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article> 


        </div>
    </div>
</div>
@endsection