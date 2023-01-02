@extends('main')
@section('title')
Home
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Home</title>
@endsection
@section('content')
    <div class="bodyContainer">
        
        <div class="homeContainer">
            <form action="" method="POST" class="navbarSearchGroup">
                @csrf
                <input type="search" class="navbarSearch" placeholder="Find your interest...">
                <button class="navbarSubmitButton" type="submit">
                    Search
                </button>
            </form>
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