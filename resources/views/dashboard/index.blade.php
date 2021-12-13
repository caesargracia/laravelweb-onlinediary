@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hello, {{ auth()->user()->name }}</h1>
  </div>

  <div class="p-5 mb-4 bg-light rounded-3 vertical-center">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Welcome to your Personal Dashboard!</h1>
      <p class="col-md-8 fs-4" >With our specially made tools and utilities, start creating new posts and blog now! You can even edit your post or delete them to your liking. We hope you enjoyed our features</p>
      <a href="/dashboard/blog">
      <button class="btn btn-primary btn-lg vertical-center" type="button">My Blogs</button>
      </a>
    </div>
  </div>
@endsection