@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection