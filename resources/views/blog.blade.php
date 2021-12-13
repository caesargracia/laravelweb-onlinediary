
@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1> 

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search Post" name="search">
        <button class="btn btn-danger" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>

@if ($blog->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $blog[0]->category->name }}" class="card-img-top" alt="{{ $blog[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $blog[0]->title }}</h3>
      <p>
        <small class="text-muted">  
        By : <a href="/authors/{{ $blog[0]->user->id }}" class="text-decoration-none"> {{ $blog[0]->user->name }} </a>in <a href="/categories/{{ $blog[0]->category->slug }}" class="text-decoration-none">{{ $blog[0]->category->name }}</a> {{ $blog[0]->created_at->diffForHumans() }}
        </small>    
    </p>
      <p class="card-text">{{ $blog[0]->excerpt }}</p>

      <a href="/blog/{{ $blog[0]->id }}" class="text-decoration-none btn btn-primary">Read More...</a>
    </div>
  </div>
  



<div class="container">
    <div class="row">
        @foreach ($blog->skip(1) as $post )

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                </div>

                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-muted">  
                      By : <a href="/authors/{{ $post->user->id }}" class="text-decoration-none"> {{ $post->user->name }} </a> {{ $blog[0]->created_at->diffForHumans() }}
                    </small>    
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/blog/{{ $post->id }}" class="btn btn-primary">Read More...</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
    {{-- @foreach ($blog->skip(1) as $post)
    <article class="mb-5 border-bottom pb-3">
        <h2>
            <a href = "/blog/{{ $post->id }}" class="text-decoration-none"> {{ $post->title }}</a>
        </h2>
        <h5>By : <a href="/authors/{{ $post->user->id }}" class="text-decoration-none"> {{ $post->user->name }} </a>in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        <p> {{ $post->excerpt }} </p>

        <a href = "/blog/{{ $post->id }}" class="text-decoration-none">Read More...</a>
    </article>
    @endforeach --}}

    @else
      <p class="text-center fs-4">No Post Found...</p>
    @endif
@endsection

