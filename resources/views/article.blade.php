@extends('main')
@section('title')
Article
@endsection

@section('css')
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/article.css">
    <title>Article</title>
@endsection
@section('content')
    <div class="bodyContainer">
        <div class="articleContainer">
            <div class="w-100">
                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-outline-secondary">❮ Back</button></a>
                <h1 class="text-center mb-5">{{ $article->title }}</h1>
            </div>
            <img src="{{ asset('storage/'.$article->imgurl) }}" class="articleImage">
            <div class="articleAuthor">
                Author : {{ $article->author->name }}<br>
                Created at: {{ $article->created_at }}
            </div>
            <div class="articleDescription">
                {{ $article->details }}
            </div>
            <div class="d-flex justify-content-end w-100 align-items-end">
                <span class="text-secondary me-5"><i>Last updated: {{ $article->updated_at }}</i></span>
            </div>
        </div>
    </div>
@endsection
