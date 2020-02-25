@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Learning Laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <p>{{ count($post->likes) }} Likes
                <a href="{{ route('blog.post.like', ['id' => $post->id]) }}">Like</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post->title }}</h1>
            <p>
                {{ $post->content }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <p style="font-weight: bold">
             @foreach($post->tags as $tag)
                    - {{ $tag->name }} -
             @endforeach
            </p>
        </div>
    </div>
@endsection
