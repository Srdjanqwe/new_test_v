@extends('layout')

@section('content')
    {{-- <p>{{ $post->user->name }}</p> --}}
    {{-- zadatak i da bude read only --}}
    <p>{{ $post->unique }}</p> {{-- zadatak i da bude read only --}}


@endsection('content')
