@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        @include('posts.form')

        <div><input class="mb-3" type="submit" value="Create" class="btn btn-primary btn-block"></div>

    </form>

@endsection
