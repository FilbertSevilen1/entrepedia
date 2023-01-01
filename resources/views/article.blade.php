@extends('main')
@section('title')
Home
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/article.css">
    <title>Article</title>
@endsection
@section('content')
    @include('component.navbar')
    <div class="bodyContainer">
        <div class="articleContainer">
            <h1 class="textHeader">News Title</h1>
            <img src="https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg" class="articleImage">
            <div class="articleAuthor">
                Created by : Name, DD-MM-YYYY
            </div>
            <div class="articleDescription">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex ea similique aliquam ipsam fuga rerum dolorem, repellat omnis iure. Assumenda laboriosam non necessitatibus doloribus maxime natus ab nisi error.
            </div>
        </div>
    </div>
@endsection