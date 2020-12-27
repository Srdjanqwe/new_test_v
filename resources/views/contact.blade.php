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
                    <tr>
                        {{-- <td>{{ $this->name}}}</td> --}}  {{-- name user-a tog id koji je napravio unique --}}
                        {{-- <td>{{ $this->Unique}}}</td> --}}
                        {{-- <td>{{Login Count}}</td> --}}
                        <td><a href="login">Login As</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection



