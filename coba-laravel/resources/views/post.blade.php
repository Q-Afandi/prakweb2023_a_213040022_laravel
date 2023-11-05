@extends('layouts.main')

@section('container')

    <h2 class="mb-5">{{ $post->title }}</h2>

   { !! $post->body !! }

    <a href="/blog" > Back to Post</a>

@endsection







