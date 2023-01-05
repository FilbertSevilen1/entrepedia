@extends('main')
@section('title')
    Author
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Author Home</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="bg-white w-100 p-4 rounded-3">

            @if(session()->has('message'))
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
                <div>
                  {{ session()->get('message') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif

            <h1>Welcome back, {{ Auth::user()->name }}!</h1>

            <div class="d-flex justify-content-between align-items-center my-4">
                <h2>Your article</h2>
                <a href="{{ url('add') }}" class="btn btn-success text-white fw-bold">+ Publish Article</a>

            </div>
            <hr>
            <div class="d-flex flex-wrap justify-content-around gap-4">
                @if ($articles->count() == 0)
                    <h5 class="text-center text-secondary"><i>You have not created an article yet...</i></h5>
                @else
                @foreach ($articles as $article)
                    @include('component.author_news_card')
                @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
