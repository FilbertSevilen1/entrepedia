<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <title>Search</title>
</head>
<body>
    @include('component.navbar')
    <div class="bodyContainer">
        
        <div class="homeContainer">
            <h1 class="textHeader">List of News you searched...</h1>
            {{-- Load Headline --}}
            @include('component.headline')
            @include('component.headline')
            @include('component.headline')
        </div>
    </div>
</body>
</html>