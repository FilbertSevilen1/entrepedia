<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/news.css">
    <title>Other</title>
</head>
<body>
    <a href="{{ url('article', ['id' => $article->id]) }}">
        <div class="headlineContainerCard">
            <h1 class="textHeader">{{ $article->title }}</h1>
            <div class="headlineContent">
                <div class="headlineDescriptionCard">
                    <div class="headlineDescriptionItem">{{ $article->details }}</div>
                    <div>
                    <p>Author : {{ $article->author->name }}</p>
                    <p class="textSmall">Created on: {{ $article->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</body>
</html>
