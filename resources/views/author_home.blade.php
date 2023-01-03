@extends('main')
@section('title')
    Home
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Author Home</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="bg-white w-100 p-4 rounded-3">
            <h1>Welcome back, [Author]!</h1>



            <div class="d-flex justify-content-between align-items-center my-4">
                <h2>Your article</h2>
                <a href="#" class="btn btn-success text-white fw-bold">+ Publish Article</a>

            </div>
            <div class="d-flex flex-wrap justify-content-around gap-4">
                @include('component.author_news_card')
                @include('component.author_news_card')
                @include('component.author_news_card')
                @include('component.author_news_card')
                @include('component.author_news_card')
                @include('component.author_news_card')
            </div>
        </div>
    </div>
@endsection
