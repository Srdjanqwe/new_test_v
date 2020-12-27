@extends('layout')

@section('content')
    <form method="POST"
          action="{{ route('posts.update', ['post'=>$post->id]) }}">
        @csrf
        @method('PUT')

        @include('posts.form')

        <div><input type="submit" value="Update" class="btn btn-primary btn-block"></div>

    </form>

@endsection
