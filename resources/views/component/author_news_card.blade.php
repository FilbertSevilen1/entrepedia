<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/news.css">
    <title>Document</title>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'.$article->imgurl) }}" height="300px" class="card-img-top object-fit-cover"
            alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text text-truncate d-block">
                {{ $article->details }}
            </p>
            <p class="card-text text-secondary">
                Created on: {{ $article->created_at }}
            </p>
            <div class="row row-cols-lg-auto g-3 align-items-center">
                <a href="{{ url('article', ['id' => $article->id]) }}" class="btn btn-primary text-white">See Details</a>
                <a href="{{ url('edit', ['id' => $article->id]) }}" class="btn btn-warning text-white mx-2">Edit</a>
                <form action="{{ url('delete') }}"  method="post" class="px-0">
                    @csrf
                    <input type="hidden" name="id" value="{{ $article->id }}">
                    <button type="submit" class="btn btn-danger text-white">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
