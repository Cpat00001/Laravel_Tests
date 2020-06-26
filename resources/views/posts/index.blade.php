@extends('layout')

@section('content')

{{-- @foreach ($posts as $post)
    <p>
        <h3>{{ $post->title }}</h3>
    </p>
@endforeach --}}

@forelse ($posts as $post)
    <h3>   
        <a href="{{ route('posts.show',['post'=>$post->id]) }}" >{{ $post->title }}</a>
    </h3>
    <a href="{{ route('posts.edit',['post'=>$post->id]) }}" class="btn btn-primary">Edit Post</a>
    <form method="POST" class="fm-inline"
    action="{{ route('posts.destroy',['post' => $post->id]) }}"" >
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete!" class="btn btn-primary" />
    </form>
@empty
    <p>No titles</p>
@endforelse

@endsection