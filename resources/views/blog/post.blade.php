@extends('blog.layout')

@section('content')
    <div class="content">
        <div class="posts">
            <div class="post">
                <div class="post-title">{{$post->title}}</div>
                <hr class="post-hr">
                <div>{!! html_entity_decode($post->content) !!}</div>
            </div>
        </div>
    </div>
@endsection
