<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/navbar.css">
    <title>Navbar</title>
</head>
<body>
    <div class="navbarContainer">
        <div class="navbarLeft">
            <a href="/" class="navbarLeft">
                
                <button class="navbarTitleButton">
                    <img src="/storage/image/websiteicon/logo.png" class="navbarLogo">
                    Entrepedia
                </button>
            </a>
            <form action="" method="POST" class="navbarSearchGroup">
                @csrf
                <input type="search" class="navbarSearch" placeholder="Find your interest...">
                <button class="navbarSubmitButton" type="submit">
                    Search
                </button>
            </form>
        
        </div>
        <div class="navbarRight">
            <a href="login" class="navbarLeft">
                <button class="navbarButton">
                    Login
                </button>
            </a>
        </div>
        
    </div>
</body>
</html>