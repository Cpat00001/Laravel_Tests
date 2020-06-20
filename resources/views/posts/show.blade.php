@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    @if ((new Carbon\Carbon())->diffinMinutes($post->created_at) < 5)
        New post! 
    @else
    <p>Post added: {{ $post->created_at->diffForHumans() }}</p>
    @endif
@endsection
