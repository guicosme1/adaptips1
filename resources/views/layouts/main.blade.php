<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/play.png" alt="logo1">
                </a>
                <ul class="navbar-nav"></ul>
                    <h5 class="nav-iten">
                        <a href="/movie" class="nav-link">Filmes</a>
                    </h5>
                    <h5 class="nav-iten">
                        <a href="/cat/1" class="nav-link">Categorias</a>
                    </h5>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p class="c-footer__text">Desenvolvido por <strong>Guilherme Cosme</strong></p>
    </footer>
</body>
</html>