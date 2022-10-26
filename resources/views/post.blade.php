@extends('layouts.main')

@section('container')
  <article>
  <h2>{{ $post->title }}</h2>
  <h5>{{ $post["author"] }}</h5>

  <p>By. Hasbulah in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a> </P>

  {!! $post->body !!}
  </article>

  <a href="/blog">Back to Post</a>
@endsection