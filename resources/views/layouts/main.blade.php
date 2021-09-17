<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
    <header>
        <nav class="navbar navbar-expand-lg navbar-light"> 
            <ul class="collapse navbar-collapse" id="navbar">
                <li class="button-start"><a href="/movie" class="nav-link">Filmes Adapti</a></li>
                <li class="button-add"><a href="{{ route('movie.create') }}" class="nav-add">Adicionar Novo Filme</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="espace"></div>
        @yield('content')
    </main>
    <footer>
        <p class="c-footer__text">Desenvolvido por <strong>Guilherme Cosme</strong></p>
        <div>
            <a href="https://twitter.com/guicpd"><i style="color:rgb(39, 39, 39);" class="fab fa-twitter"></i></a>
            <a href="https://github.com/guicosme1"><i style="color:rgb(39, 39, 39);" class="fab fa-github"></i></a>
        </div>

    </footer>
</body>
</html>