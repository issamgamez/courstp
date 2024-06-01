@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
