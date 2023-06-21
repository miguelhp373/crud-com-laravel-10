{{-- https://www.youtube.com/watch?v=rqtZ0EmciJ8&t=2050s --}}

@extends('master')

@section('content')

<div class="container-table">

    <h2>Users</h2>

    <table class="table table-hover">
        <thead>
            <th>#</th>
            <th>First Name</th>
            <th></th>
            <th></th>
        </thead>

        @foreach ($users as $user)
        <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->firstname}}</td>
                <td><a class="btn btn-success" href="{{ route('users.edit', ['user'=>$user->id]) }}">Edit</a></td>
                <td>
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>

        @endforeach

    </table>
</div>

<footer>
    <div class="footer-btn-container">
        <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Click Here to create a new user</a>
    </div>
</footer>

@endsection
