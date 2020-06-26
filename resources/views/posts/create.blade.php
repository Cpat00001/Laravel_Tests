@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}"" >
        @csrf
        <p>
            <label>Title</label>
            <input type="text" name="title" class="form-control"
             value="{{ old('title') }}"">
        </p>
        <p>
            <label>Content</label>
            <input type="text" name="content" class="form-control"
             value="{{ old('content') }}">
        </p>
        <button type="submit" class="btn btn-primary btn-block">Create</button>
    </form>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@endsection