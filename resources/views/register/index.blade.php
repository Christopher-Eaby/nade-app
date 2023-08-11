@extends('layouts.index')

@section('content')
    <h1>Register</h1>

    <form method="post" class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
        <label for="name">Last Name</label>
        <input type="text" name="last_name" class="form-control">
        <label for="name">Email</label>
        <input type="email" name="email" class="form-control">
        <label for="name">Password</label>
        <input type="text" name="password" class="form-control">
        <input type="submit" class="btn btn-primary">
        {{csrf_field()}}
    </form>
@endsection