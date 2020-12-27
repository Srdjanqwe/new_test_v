@extends('layout')

@section('content')
        <div class="container">
            <div class="row" style="margin-top: 45rpx">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-hover">
                        <h4>List of Users</h4>
                        <hr>
                        <thead>
                            <th>Name</th>
                            <th>Unique</th>
                            <th>Login Count</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)

                                <tr>
                                    <td><a href="{{ route('posts.show', ['post' =>$post->id]) }}">{{ $post->user->name ?? null}}</a></td>
                                    <td><a href="{{ route('posts.show', ['post' =>$post->id]) }}">{{ $post->unique ?? null}}</a></td>
                                    <td><a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a></td>

                                    @can('home.secret')
                                        <td><a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post->id]) }}">Login As</a></td>
                                    @endcan
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection('content')
