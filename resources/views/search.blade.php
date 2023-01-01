@extends('main')
@section('title')
Search
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <title>Search</title>
@endsection

@section('content')
    <div class="bodyContainer">
        
        <div class="homeContainer">
            <h1 class="textHeader">List of News you searched...</h1>
            {{-- Load Headline --}}
            @include('component.headline')
            @include('component.headline')
            @include('component.headline')
        </div>
    </div>
@endsection
