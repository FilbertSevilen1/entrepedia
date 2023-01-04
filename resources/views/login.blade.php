@extends('main')
@section('title')
Login
@endsection
@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Login</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="bg-white w-50 p-5 rounded-3 mt-5">
            <h1 class="text-center mb-5">Login</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email or Username">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-2">

                            <label>
                                <a href="#">Forgot your Password ?</a>
                            </label>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary text col-md-12">Login</button>
            </form>

        </div>
    </div>
@endsection
