@extends('layouts.main')

@section('container')

    <div class="b-example-divider"></div>

    <div class="container my-5">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1">Online Diary</h1>
          <p class="lead">Write your favourite stories, tips and tricks, daily thoughts, and share your experience through this personalized blog web!</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <a href="/blog"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Blog</button></a>
            <a href="/about"><button type="button" class="btn btn-outline-secondary btn-lg px-4">About</button></a>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="/images/heroimage.png" alt="hero" width="720" >
        </div>
      </div>
    </div>
  
    <div class="b-example-divider"></div>
@endsection

