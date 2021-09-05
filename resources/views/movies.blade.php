<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background: rgb(29, 29, 29);
        font-family: 'Roboto', sans-serif;
        color: white;
    }
</style>
<body>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }} from {{ $movie->country->pais }}</h4>
        
    @endforeach
</body>
</html>