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
            <form action="{{ url('search') }}" method="GET" role="search" class="navbarSearchGroup">
                @csrf
                <input type="text" name="param" class="navbarSearch" placeholder="Find your interest...">
                <button class="navbarSubmitButton" type="submit">
                    Search
                </button>
            </form>
            <h1 class="textHeader">Headline News</h1>
            {{-- Load Headline --}}
            @if ($main_articles->count() == 0)
                <h5 class="text-center text-secondary"><i>No articles have been made yet...</i></h5>
            @else
                @foreach ($main_articles as $article)
                    @include('component.headline')
                @endforeach
            @endif

            <h1 class="textHeader mt-30">Other News</h1>
            @if ($other_articles->count() == 0)
                <h5 class="text-center text-secondary"><i>There are no more available articles left...</i></h5>
            @else
                <div class="homeNewsContainer">
                    @foreach ($other_articles as $article)
                        @include('component.newscard')
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
