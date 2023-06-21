@extends('master')

@section('content')

<div class="container-form">
    {{-- https://youtu.be/rqtZ0EmciJ8?t=2050 --}}
    <h2>Edit</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.update', ['user'=>$user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <div class="container-image-profile">
            <div class="row">
                <img src="{{$user->image}}" alt="">
            </div>
        </div>

        <div class="mb-3">
          <label for="InputEmail" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" value="{{$user->email}}">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="InputFirstName" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" id="InputFirstName" aria-describedby="emailHelp" value="{{$user->firstname}}">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="Inputlastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="Inputlastname" aria-describedby="emailHelp" value="{{$user->lastname}}">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
