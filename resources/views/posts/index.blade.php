@extends('layouts.app')

@section('content')
    <h1> Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                <small>Writtten on {{$post->created_at}}</small>
            </div>
        @endforeach

    @else
    <p> No posts found</p>
    @endif


@endsection