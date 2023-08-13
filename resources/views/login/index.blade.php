@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Login</h1>
            <form method="post" class="form-group">
                <label for="name">Email</label>
                <input class="form-control" type="email" name="email">
                <label for="name">Password</label>
                <input class="form-control" type="text" name="password">
                <input class="btn btn-primary mt-4" type="submit">
                {{csrf_field()}}
            </form>
        </div>
    </div>
    
@endsection