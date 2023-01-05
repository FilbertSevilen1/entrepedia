@extends('main')
@section('title')
Register
@endsection
@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Register</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="bg-white w-50 p-5 rounded-3 my-4">
            <h1 class="text-center mb-5">Register</h1>

            @if(session()->has('message'))
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                <div>
                  {{ session()->get('message') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif

            <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
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
                    <label for="gender" class="form-label">Gender</label><br>
                    <input type="radio" name="gender" id="genderM" class="cursorPointer formInputCheck" {{ old('gender') == 'Male' ? 'checked' : '' }} value="Male">
                    <label for="genderM" class="form-label">Male</label>
                    <input type="radio" name="gender" id="genderF" class="cursorPointer formInputCheck" {{ old('gender') == 'Female' ? 'checked' : '' }} value="Female">
                    <label for="genderF" class="form-label">Female</label>
                    @error('gender')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="place" class="form-label">Place and Date of Birth</label><br>
                    <input type="text" name="place" id="place" class="form-control mb-3" value="{{ old('place') }}" placeholder="Place of Birth">
                    @error('place')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                    <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control" placeholder="Date of Birth">
                    @error('dob')
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
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="Cpassword" id="Cpassword"class="form-control" placeholder="Confirm Password">
                    @error('Cpassword')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary text col-md-12">Register</button>
            </form>

        </div>
    </div>
@endsection
