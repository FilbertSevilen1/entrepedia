@extends('main')
@section('title')
Search
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Search</title>
@endsection

@section('content')
    <div class="bodyContainer">

        <div class="homeContainer">
            <form action="{{ url('search') }}" method="GET" role="search" class="navbarSearchGroup">
                @csrf
                <input type="text" name="param" class="navbarSearch" value="{{ old('param', app('request')->input('param')) }}" placeholder="Find your interest...">
                <button class="navbarSubmitButton" type="submit">
                    Search
                </button>
            </form>
            @if ($articles->count() == 0)
                <h5 class="text-center text-secondary"><i>No article found...</i></h5>
            @else
                <h1 class="textHeader">List of News you searched</h1>
                {{-- Load Headline --}}
                @foreach ($articles as $article)
                    @include('component.headline')
                @endforeach
            @endif
        </div>
    </div>
@endsection
