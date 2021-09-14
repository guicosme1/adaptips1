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
</head>
<body> 
    <header>
        <nav class="navbar navbar-expand-lg navbar-light"> 
            <ul class="collapse navbar-collapse" id="navbar">
                <li><a href="/movie" class="nav-link">Filmes Adapti</a></li>
                <li><a href="{{ route('movie.create') }}" class="nav-link">Adicionar Novo Filme</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p class="c-footer__text">Desenvolvido por <strong>Guilherme Cosme</strong></p>
    </footer>
</body>
</html>