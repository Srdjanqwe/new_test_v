@extends('layout')

@section('content')
    {{-- <h1>{{ $post->title }}</h1> kako ga deklarises u postcontroleru tako moras i ovde ako je tamo post onda je o ovde post --}}
    {{-- <p>{{ $post->content }}</p> zadatak i da bude read only --}}

    <p>{{ $post->user->name }}</p>
    {{-- zadatak i da bude read only --}}
    <p>{{ $post->unique }}</p> {{-- zadatak i da bude read only --}}


@endsection('content')
