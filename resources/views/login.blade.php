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
        <div class="bg-white w-50 p-5 rounded-3 my-5">
            <h1 class="text-center mb-5">Login</h1>

            <div>
                @error('credential')
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                    <div>
                      {{ $message }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @enderror
            </div>

            <form action="{{ url('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="form-check mb-5">
                    <input class="form-check-input" {{ old('remember') == null ? "" : "checked" }} type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                      Remember me
                    </label>
                  </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-2">
                            <label>
                                <a href="#"><button type="button" class="btn btn-link ps-0">Forgot your Password ?</button></a>
                            </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary text col-md-12">Login</button>
            </form>

        </div>
    </div>
@endsection
