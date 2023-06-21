@extends('master')

@section('content')

<div class="container-form">

    <h2>Create</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('users.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="InputEmail" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" >
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="InputFirstName" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" id="InputFirstName" aria-describedby="firstName" >
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="Inputlastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="Inputlastname" aria-describedby="lastName">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>

        <div class="mb-3">
            <label for="Passworduser" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="Passworduser">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
