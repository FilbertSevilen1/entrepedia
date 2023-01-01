@extends('main')
@section('title')
Home
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <title>Home</title>
@endsection
@section('content')
    <div class="bodyContainer">
        
        <div class="homeContainer">
            <h1 class="textHeader">Headline News</h1>
            {{-- Load Headline --}}
            @include('component.headline')
            @include('component.headline')
            @include('component.headline')

            <h1 class="textHeader mt-30">Other News</h1>
            <div class="homeNewsContainer">
                @include('component.newscard')
                @include('component.newscard')
                @include('component.newscard')
                @include('component.newscard')
            </div>
        </div>
    </div>
@endsection