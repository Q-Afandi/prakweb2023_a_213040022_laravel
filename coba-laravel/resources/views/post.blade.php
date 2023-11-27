@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            @if ($posts[0]->image)
    <div style="max-height: 400px; overflow:hidden">
       <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top mt-3" alt="{{ $posts[0]->category->name }} "
        class="img-fluid">
   </div>
    @else
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. 
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                    in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }} "
                class="img-fluid">
            </div>
        @else
             <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }} " class="img-fluid">
        @endif

            <article class="my-3 fs-5">
              {!! $post->body !!} {{-- Melakukan sebuah escaping. sebuah escape character agar tag html dijalankan --}}
            </article>

            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }} "
               class="img-fluid">     
       @else
       <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
       @endif
       
            <a href="/posts" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>
    
    @endsection







