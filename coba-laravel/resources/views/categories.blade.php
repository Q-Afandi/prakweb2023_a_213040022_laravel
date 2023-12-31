{{-- @dd($posts) --}}



@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
{{-- <h1>Halaman Posts</h1> --}}
   
    @foreach ($posts as $post)
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/post?categories/{{ $category->slug }}">
                    <div class="card text-bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill pd-4 fs-3" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>s
            @endforeach
        </div>
    </div>
    @endforeach


@endsection