@extends('main')
@section('title')
    Home
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Publish Article</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="bg-white w-75 p-4 rounded-3">
            <h1 class="text-center mb-5">Publish Article</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="Title">
                </div>
                <div class="mb-5">
                    <label for="Content" class="form-label">Article Content</label>
                    <textarea class="form-control" id="Content" style="height: 200px;"></textarea>
                </div>
                <div class="mb-5">
                    <label for="Photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="Photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
