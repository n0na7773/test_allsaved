@extends('layouts.app')

@section('title','Dashboard')

@section('content')
  <section id="main">
    <header class="major">
      <h2>Dashboard</h2>
    </header>
    <div class="posts">
      @foreach($posts as $post)
        <article>
          <h3>{{ $post->title }}</h3>
          <p>{{ Str::limit($post->body, 100) }}</p>
        </article>
      @endforeach
    </div>
  </section>
@endsection
