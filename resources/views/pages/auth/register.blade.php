@extends('layout.default')


@section("content")
    <form action="{{ url("register") }}" method="POST">
        @csrf
        <h1>Register</h1>
        <p>Create your new account.</p>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email" required />
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control" type="password" name="password"  required />
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm password</label>
            <input class="form-control" type="password" name="password_confirmation" required />
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    @include("components.errors")
    @include("components.status")
@endsection

