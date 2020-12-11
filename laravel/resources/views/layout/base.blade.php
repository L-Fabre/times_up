<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/header-footer.css">
</head>
<body>
    <header>
        <nav>
            <a href="#" class="survol">
                <div>
                    <img src="img/home.png" alt="">
                </div>
            </a>
            {{-- <img class="etc invisible" src="img/etiquette1.png" alt=""> --}}

            <a href="#">
                <div>
                    <img src="img/play.png" alt="">
                </div>
            </a>
            <a href="#">
                <div>
                    <img src="img/copy.png" alt="">
                </div>
            </a>
        </nav>
    </header>
    
    <main>
    
        @yield('content')
    
    </main>
</body>
</html>