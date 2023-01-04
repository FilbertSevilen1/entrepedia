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
        <div class="bg-white w-50 p-5 rounded-3 mt-4">
            <h1 class="text-center mb-5">Register</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label><br>
                    <input type="radio" name="gender" id="genderM" value="Male">
                    <label for="genderM" class="form-label">Male</label>
                    <input type="radio" name="gender" id="genderF" value="Female">
                    <label for="genderF" class="form-label">Female</label>
                    @error('gender')
                        {{message}}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="place" class="form-label">Place and Date of Birth</label><br>
                    <input type="text" name="place" id="place" class="form-control mb-3" placeholder="Place of Birth">
                    @error('place')
                        {{message}}
                    @enderror
                    <input type="date" name="Date of Birth" id="dob" class="form-control" placeholder="Date of Birth">
                    @error('dob')
                        {{message}}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Cpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="Cpassword" id="Cpassword"class="form-control" placeholder="Confirm Password">
                    @error('Cpassword')
                        {{$message}}
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary text col-md-12">Register</button>
            </form>

        </div>
    </div>
@endsection
