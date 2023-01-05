@extends('main')
@section('title')
    Edit
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Edit Article</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="bg-white w-75 p-4 rounded-3">
            <div>
                <a href="{{ url('author') }}"><button type="button" class="btn btn-outline-secondary">❮ Back</button></a>
                <h1 class="text-center mb-5">Edit Article</h1>
            </div>

            <form action="{{ url('edit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $article->id }}">
                <input type="hidden" name="old_img" value="{{ $article->imgurl }}">
                <div class="mb-3">
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="Title" value="{{ old('title', $article->title) }}">
                    @error('title')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Content" class="form-label">Article Content</label>
                    <textarea class="form-control" name="content" id="Content" style="height: 200px;">{{ old('content', $article->details) }}</textarea>
                    @error('content')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Photo" class="form-label">Photo</label>
                    <input type="file" name="file" class="form-control" id="Photo">
                    @error('file')
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                        <div>
                          {{ $message }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>
    </div>
@endsection
